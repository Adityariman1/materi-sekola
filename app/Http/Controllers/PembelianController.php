<?php

namespace App\Http\Controllers;
use App\Models\Pembelian;
use Illuminate\Http\Request;

class PembelianController extends Controller
{
    public function data(){
        $p = Pembelian::all();
        return view('tampil_pembelian', compact('p'));
        }
}
