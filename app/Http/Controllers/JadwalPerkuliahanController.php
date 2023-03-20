<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JadwalPerkuliahan;

class JadwalPerkuliahanController extends Controller
{
    public function index(){
        return view('jadwalperkuliahan',[
            'jadwal_perkuliahan' => JadwalPerkuliahan::all()
        ]);
    }
}
