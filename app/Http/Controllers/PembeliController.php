<?php

namespace App\Http\Controllers;
use App\Models\Pembeli;
use Illuminate\Http\Request;

class PembeliController extends Controller
{
    public function data(){
        $p = Pembeli::all();
        return view('tampil_pembeli', compact('p'));
        }
}
