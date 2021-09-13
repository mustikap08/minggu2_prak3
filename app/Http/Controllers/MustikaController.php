<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MustikaController extends Controller
{
    public function homepage(){
        return 'Selamat Datang di Jurusan Teknologi Informasi Politeknik Negeri Malang';
    }
    public function m(){
        return 'Halaman Program Studi D3 - Manajemen Informatika'; 
    }
    public function t(){
        return 'Halaman Program Studi D4 - Teknik Informatika';
    }

    public function berita($angka){
        return 'Halaman Berita Jurusan Teknologi Informasi '.$angka;
    }

    public function per(){
        return 'Halaman Sarana Perkantoran Jurusan Teknologi Informasi';
    }
    public function lab(){
        return 'Halaman Daftar Sarana Laboratorium Jurusan Teknologi Informasi';
    }
    public function kel(){
        return 'Halaman Sarana Kelas Jurusan Teknologi Informasi';
    }
    public function lain(){
        return 'Halaman Daftar Sarana Lainnya Jurusan Teknologi Informasi';
    }

    public function soal(){
        echo 'About Us dari Jurusan Teknologi Informasi';
    }

    public function komen($nama, $pesan){
        return 'Nama Saya '.$nama. '. Pesan Saya adalah '.$pesan;
    }
}
