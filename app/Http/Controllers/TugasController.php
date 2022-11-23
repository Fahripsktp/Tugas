<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TugasController extends Controller
{
    public function tugas1()
    {
        return view('tugas1_2.tugas1');
    }


    public function tugas2()
    {
        return view('tugas1_2.tugas2');
    }
}
