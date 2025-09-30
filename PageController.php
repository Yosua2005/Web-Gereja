<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function jadwal()
    {
        $jadwal = [
            ['hari' => 'Minggu', 'jam' => '08.00', 'acara' => 'Ibadah Umum'],
            ['hari' => 'Minggu', 'jam' => '10.30', 'acara' => 'Sekolah Minggu'],
            ['hari' => 'Rabu', 'jam', => '18.00', 'acara' => 'Doa Bersama']
        ];
        return view('jadwal' compact('jadwal'));
    }

    public function kontak()
    {
        return view('koontak');
    }
}