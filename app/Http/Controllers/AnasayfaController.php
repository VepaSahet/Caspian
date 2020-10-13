<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnasayfaController extends Controller
{
    public function index()
    {
        $isim = "Vepa";
        $soyisim = "Sahetnyyazov";
        return view('anasayfa', compact('isim', 'soyisim'));
    }
}
