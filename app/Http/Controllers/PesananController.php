<?php

namespace App\Http\Controllers;
use App\Models\Pesanan;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    public function data(){
        $p = Pesanan::all();
        return view('tampil_pesanan', compact('p'));
        }
}
