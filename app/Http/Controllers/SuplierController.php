<?php

namespace App\Http\Controllers;
use App\Models\Suplier;
use Illuminate\Http\Request;

class SuplierController extends Controller
{
    public function data(){
        $s = Suplier::all();
        return view('tampil_suplier', compact('s'));
        }
}
