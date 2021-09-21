<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MustikaController extends Controller
{
    public function index(){
        return view('home');
    }
    public function m(){
        return view('prodi.mi');
    }
    public function t(){
        return view('prodi.ti');
    }

    public function berita($angka){
        return view('news', ['angka' => $angka]);
    }

    public function kantor(){
        return view('sarana.perkantoran');
    }
    public function lab(){
        return view('sarana.laboratorium');
    }
    public function kelas(){
        return view('sarana.kelas');
    }
    public function lain(){
        return view('sarana.lainnya');
    }

    public function about(){
        return view('about-us');
    }

    public function komen($nama, $pesan){
        return view('comment', ['nama' => $nama, 'pesan' => $pesan]);
    }
}
