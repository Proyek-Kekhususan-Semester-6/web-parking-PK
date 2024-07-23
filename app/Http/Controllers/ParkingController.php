<?php

namespace App\Http\Controllers;

use App\Models\SlotParkir;
use Illuminate\Http\Request;
// use GuzzleHttp\Psr7\Request;

class ParkingController extends Controller
{
    //

    public function index()
    {
        $data = [
            "title" => "Home",
        ];
        return view('pages.users.index', $data);
    }

    public function retrieve(Request $request)
    {
        $data = [
            "title" => "Parking Lots",
        ];
        $data['filter_selected'] = "all";
        $data['slots'] = SlotParkir::where("status", "!=", "perbaikan")->get();
        if (isset($request['filter']) && $request['filter'] != "all") {
            $data["slots"] = SlotParkir::where("status", "!=", "perbaikan")->where("status", $request['filter'])->get();
            $data['filter_selected'] = $request['filter'];
        }
        return view('pages.users.parking.index', $data);
    }

    public function search(Request $request)
    {
        $req = htmlspecialchars($request['keyword']);
        // dd($req);
        $data = [
            "title" => "Parking Lots",
        ];

        $data['filter_selected'] = "all";

        if (!empty($req)) {
            $data['slots'] = SlotParkir::where("status", "!=", "perbaikan")->where('kode_slot_parkir', $req)->orWhere('letak_parkir', $req)->orWhere('status', $req)->get();
            # code...
        } else {
            $data['slots'] = SlotParkir::where("status", "!=", "perbaikan")->get();
        }
        return view('pages.users.parking.index', $data);
    }


    public function update(Request $request)
    {

        $validatedData = $request->validate([
            'id_slot_parkir' => 'required|numeric',
            'status' => 'required|string',
        ]);


        SlotParkir::where('id_slot_parkir', $validatedData['id_slot_parkir'])->update(['status' => $validatedData['status']]);


        return response()->json(['message' => 'Data saved successfully'], 200);
    }
}
