<?php

namespace App\Controllers;

class BKing extends BaseController
{
    public function index()
    {
        // Tampilkan halaman register
        return view('BKLogin');
    }

    public function authenticate()
    {
        // Logika untuk proses autentikasi
        // Tulis kode logika autentikasi Anda di sini
        // Misalnya menggunakan model atau library untuk memeriksa kredensial login
    
        // Langsung arahkan ke halaman dashboard
        return redirect()->to(base_url('/dash'));
    }
    
    public function register()
    {
        // Tampilkan halaman register
        return view('BKRegister');
    }

    public function dashboard()
    {
        // Tampilkan halaman dashboard
        return view('BKDashboard');
    }
    
    public function save()
    {
        // Logika untuk menyimpan data register ke database
        // Tulis kode logika penyimpanan data Anda di sini
        // Misalnya menggunakan model untuk menyimpan data
    }

}