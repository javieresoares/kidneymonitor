<?php

namespace App\Http\Controllers;

use App\Models\CekGinjal;
use Illuminate\Http\Request;

class RiwayatController extends Controller
{
    public function index()
    {
        // Ambil riwayat cek ginjal berdasarkan user yang sedang login
        // Asumsikan bahwa Anda menggunakan fitur autentikasi di Laravel, dengan 'user_id' sebagai foreign key
        $riwayat = CekGinjal::where('user_id', auth()->id())->get();

        // Kirim data riwayat ke view riwayat.index
        return view('riwayat', compact('riwayat'));
    }

    // Menyimpan riwayat cek ginjal
    public function store(Request $request)
    {
        // Validasi inputan dari form
        $validated = $request->validate([
            'bp' => 'required|numeric|min:0',
            'bgr' => 'required|numeric|min:0',
            'rc' => 'required|numeric|min:0',
            'sg' => 'required|numeric|min:0',
            'bu' => 'required|numeric|min:0',
            'htn' => 'required|numeric|min:0',
            'al' => 'required|numeric|min:0',
            'sc' => 'required|numeric|min:0',
        ]);

        // Menyimpan data cek ginjal ke dalam database
        CekGinjal::create([
            'user_id' => auth()->id(),
            'bp' => $validated['bp'],
            'bgr' => $validated['bgr'],
            'rc' => $validated['rc'],
            'sg' => $validated['sg'],
            'bu' => $validated['bu'],
            'htn' => $validated['htn'],
            'al' => $validated['al'],
            'sc' => $validated['sc'],
        ]);

        // Redirect ke halaman riwayat setelah data disimpan
        return redirect()->route('riwayat.index')->with('success', 'Data cek ginjal berhasil disimpan!');
    }
}
