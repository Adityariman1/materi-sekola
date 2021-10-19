<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function tampilkan(){
        $nama = "adit";
        $umur = "17 Tahun";
        $status = "Pelajar";
        return view('sample', compact('nama','umur','status'));
    }
}
