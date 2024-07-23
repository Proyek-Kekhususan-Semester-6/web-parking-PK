<?php

namespace App\Http\Controllers;

use App\Models\SlotParkir;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    //
    public function index()
    {
        $data["tag"] = "Dashboard";
        $data["title"] = "Dashboard";
        $data['total_parking_lot'] = SlotParkir::all(['status'])->count();
        $data['total_aktif'] = SlotParkir::where("status", "!=", "perbaikan")->count();
        $data['total_terisi'] = SlotParkir::where("status", "terisi")->count();
        $data['total_kosong'] = SlotParkir::where("status", "kosong")->count();
        $data['total_perbaikan'] = SlotParkir::where("status", "perbaikan")->count();
        return view("pages.admin.dashboard.index", $data);
    }

    public function login()
    {
        $data["tag"] = "Login";
        $data["title"] = "Login";
        return view("pages.admin.login", $data);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect("/login")->with("logout", "Berhasil logout, silahkan login kembali!");
    }

    public function authenticate(Request $request)
    {
        if (empty($request['email']) || empty($request['email'])) {
            return back()->with('empty', 'Mohon isi dengan benar!');
        }
        $credentials = $request->validate([
            "email" => "required|email",
            "password" => "required"
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }

        return back()->with('loginError', 'Email dan Password tidak cocok!');
    }

    public function register(Request $request)
    {

        $validatedData["name"] = "AdminParking";
        $validatedData["email"] = "adminparking345@gmail.com";

        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make("1432nimda#");
        User::create($validatedData);
        dd("Berhasil create user!");
        // session()->flash('success', 'Registration Successfull! Please Login');
        // return redirect('/login')->with('success', 'Registration Successfull! Please Login');
    }

    public function retrieve(Request $request)
    {
        $data["tag"] = "Parking Lots";
        $data["title"] = "Parking Lots";
        $data['parking_lots'] = SlotParkir::paginate(2);
        $data["keyword"] = "";
        if (isset($request['keyword'])) {
            $keyword = $request['keyword'];
            $data['parking_lots'] = SlotParkir::where('kode_slot_parkir', 'LIKE', "%$keyword%")
                ->orWhere('letak_parkir', 'LIKE', "%$keyword%")
                ->orWhere('status', 'LIKE', "%$keyword%")
                ->paginate(2);
            $data["keyword"] = $keyword;
        }
        return view("pages.admin.parking.index", $data);
    }

    public function create(Request $request)
    {
        $data["tag"] = "Parking Lots";
        $data["title"] = "Tambah";
        $request->session()->put('previous_url', url()->previous());
        return view("pages.admin.parking.create", $data);
    }

    public function show(Request $request, SlotParkir $slotParkir)
    {
        $data["tag"] = "Parking Lots";
        $data["title"] = "Detail";
        $data['parking_lot'] = $slotParkir;
        $request->session()->put('previous_url', url()->previous());

        return view("pages.admin.parking.detail", $data);
    }

    public function store(Request $request)
    {
        $data["tag"] = "Parking Lots";
        $messages = [
            'kode_slot_parkir.required' => 'Kode Slot Parkir wajib diisi.',
            'kode_slot_parkir.unique' => 'Kode Slot Parkir sudah ada.',
            'kode_slot_parkir.max' => 'Kode Slot Parkir maksimal 10 karakter.',
            'letak_parkir.required' => 'Letak Parkir wajib diisi.',
            'letak_parkir.max' => 'Letak Parkir maksimal 255 karakter.',
        ];
        $validatedData = $request->validate([
            "kode_slot_parkir" => "required|max:10|unique:slot_parkir",
            "letak_parkir" => "required|max:255",
        ], $messages);

        $validatedData['status'] = "kosong";
        SlotParkir::create($validatedData);

        return redirect()->route("dashboard.parking_lots.create")->with('add_success', 'Slot Parkir berhasil ditambah');
    }

    public function edit(Request $request, SlotParkir $slotParkir)
    {
        $data["tag"] = "Parking Lots";
        $data["title"] = "Edit";
        $data['parking_lot'] = $slotParkir;
        $request->session()->put('previous_url', url()->previous());
        return view("pages.admin.parking.edit", $data);
    }

    public function update(Request $request, SlotParkir $slotParkir)
    {
        $data["tag"] = "Parking Lots";
        $messages = [
            'kode_slot_parkir.required' => 'Kode Slot Parkir wajib diisi.',
            'kode_slot_parkir.unique' => 'Kode Slot Parkir sudah ada.',
            'kode_slot_parkir.max' => 'Kode Slot Parkir maksimal 10 karakter.',
            'letak_parkir.required' => 'Letak Parkir wajib diisi.',
            'letak_parkir.max' => 'Letak Parkir maksimal 255 karakter.',
            'status.required' => 'Status Parkir wajib diisi.',
            'status.in' => 'Status Parkir hanya bisa diisi dengan terisi, kosong, dan perbaikan.',
        ];
        $rules = [
            "kode_slot_parkir" => "required|max:10",
            "letak_parkir" => "required|max:255",
            "status" => "required|in:terisi,kosong,perbaikan",
        ];
        // dd($request['kode_slot_parkir'] != $slotParkir['kode_slot_parkir']);
        if ($request['kode_slot_parkir'] != $slotParkir->kode_slot_parkir) {
            $rules["kode_slot_parkir"] = "required|max:10|unique:slot_parkir";
        }
        $validatedData = $request->validate($rules, $messages);

        $slotParkir->update($validatedData);
        return redirect()->to("/dashboard/parking_lots/edit/" . $slotParkir["id_slot_parkir"])->with('edit_success', 'Slot Parkir berhasil diubah');
    }

    public function destroy(SlotParkir $slotParkir)
    {
        $slotParkir->delete();
        return redirect()->route("dashboard.parking_lots")->with('delete_success', 'Slot Parkir berhasil dihapus');
    }
}
