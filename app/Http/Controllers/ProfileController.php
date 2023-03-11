<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        return view(('profile'))
        ->with('nama', 'Ulfi Mustatiq Abidatul Izza')
        ->with('jurusan', 'Teknik Informatika')
        ->with('nim', '2141720052')
        ->with('kelas', 'TI - 2H')
        ->with('absen', '29');
    }
}