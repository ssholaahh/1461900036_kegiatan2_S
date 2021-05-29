<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class AbsenController extends Controller
{
    public function absen(Request $request)
    {
        $data = DB::table("absen")
            ->join("siswa", "siswa.nis", "absen.nis")
            ->join("semester", "semester.id_semester", "absen.id_semester")
            ->where("semester.status", "Ganjil")
            ->get();

        return view("tugaspraktikum-0036",compact('data'));
    }
}
