<?php

namespace App\Http\Controllers;
use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function data(){
        $b = Barang::all();
        return view('tampil_barang', compact('b'));
        }
}
