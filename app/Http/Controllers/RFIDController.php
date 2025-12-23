<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RFID;

class RFIDController extends Controller
{
    public function index()
    {
        return view('rfidview');
    }

    public function check(Request $request)
    {
        $rfid = RFID::where('rfid_tag', $request->rfid_tag)->first();

        if ($rfid) {
            return "Kartu cocok";
        } else {
            return "Kartu tidak cocok";
        }
    }
}
