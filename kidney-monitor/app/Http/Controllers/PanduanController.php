<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PanduanController extends Controller
{
    public function index()
    {
        return view('panduan.index');
    }

    public function aktivitasFisik()
    {
        return view('panduan.aktivitas_fisik');
    }

    public function polaMakanSehat()
    {
        return view('panduan.pola_makan_sehat');
    }

    public function beratBadan()
    {
        return view('panduan.berat_badan');
    }

    public function manajemenStress()
    {
        return view('panduan.manajemen_stress');
    }
}
