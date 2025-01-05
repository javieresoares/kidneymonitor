<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\UserData;

class UserDataController extends Controller
{
    // Menyimpan atau memperbarui data pengguna
    public function saveData(Request $request)
    {
        $request->validate([
            'golongan_darah' => 'required',
            'riwayat_penyakit' => 'nullable|string',
            'riwayat_obat' => 'nullable|string',
        ]);

        // Menyimpan atau memperbarui data pengguna
        UserData::updateOrCreate(
            ['user_id' => Auth::id()], // Menggunakan ID pengguna yang sedang login
            $request->only(['golongan_darah', 'riwayat_penyakit', 'riwayat_obat'])
        );

        return redirect()->route('riwayat.index')->with('success', 'Data berhasil disimpan');
    }

    // Mengedit data pengguna
    public function editData(Request $request)
    {
        $userData = UserData::where('user_id', Auth::id())->first();

        if ($userData) {
            $userData->update($request->only(['golongan_darah', 'riwayat_penyakit', 'riwayat_obat']));
            return redirect()->route('riwayat.index')->with('success', 'Data berhasil diupdate');
        }

        return redirect()->route('riwayat.index')->with('error', 'Data tidak ditemukan');
    }

    // Menghapus data pengguna
    public function deleteData()
    {
        $userData = UserData::where('user_id', Auth::id())->first();

        if ($userData) {
            $userData->delete();
            return redirect()->route('riwayat.index')->with('success', 'Data berhasil dihapus');
        }

        return redirect()->route('riwayat.index')->with('error', 'Data tidak ditemukan');
    }

    // Menampilkan data riwayat pengguna
    public function index()
    {
        $userData = UserData::where('user_id', Auth::id())->first();
        $userHistories = UserData::where('user_id', Auth::id())->get();

        return view('riwayat.index', compact('userData', 'userHistories'));
    }
}
