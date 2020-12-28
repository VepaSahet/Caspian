<?php

namespace App\Http\Controllers;

use App\Models\Kullanici;
use App\Mail\KullaniciKayitMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;

class KullaniciController extends Controller
{
    public function giris_form()
    {
        return view('kullanici.oturumac');
    }

    public function kaydol_form()
    {
        return view('kullanici.kaydol');
    }

    public function kaydol()
    {
        $this->validate(request(),[
            'adsoyad' =>'required|min:5|max:60',
            'email' =>'required|email|unique:kullanici',
            'sifre'=>'required|confirmed|min:5|max:15'
        ]);

        $kullanici = Kullanici::create([

                'adsoyad'             => request('adsoyad'),
                'email'               => request('email'),
                'sifre'               => Hash::make(request('sifre')),
                'aktivasyon_anahtari' => Str::random(60),
                'aktif_mi'            => 0
        ]);

        Mail::to(request('email'))->send(new KullaniciKayitMail($kullanici));

        auth()->login($kullanici);

        return redirect()->route('anasayfa');

    }
}
