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

    public function retrieve()
    {
        $data = [
            "title" => "Parking Lots",
        ];

        $data['slots'] = SlotParkir::all(['id_slot_parkir', 'status']);
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
