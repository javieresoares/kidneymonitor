<?php

namespace App\Http\Controllers;

use App\Models\CekGinjal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CekGinjalController extends Controller
{
    public function index()
    {
        return view('cek-ginjal.index');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'bp' => 'required|numeric',
            'bgr' => 'required|numeric',
            'rc' => 'required|numeric',
            'sg' => 'required|numeric',
            'bu' => 'required|numeric',
            'htn' => 'required|in:yes,no',
            'al' => 'required|numeric',
            'su' => 'required|numeric',
            'sc' => 'required|in:yes,no',
            'sod' => 'required|numeric',
            'pot' => 'required|numeric',
            'rbc' => 'required|in:normal,abnormal',
            'pc' => 'required|in:normal,abnormal',
            'pcc' => 'required|in:present,notpresent',
            'ba' => 'required|in:present,notpresent',
            'hemo' => 'required|numeric',
            'pcv' => 'required|integer',
            'wc' => 'required|integer',
            'dm' => 'required|in:yes,no',
            'cad' => 'required|in:yes,no',
            'appet' => 'required|in:good,poor',
            'pe' => 'required|in:yes,no',
            'ane' => 'required|in:yes,no',
        ]);

        $validated['user_id'] = Auth::id();
        $validated['classification'] = $this->classifyData($validated);

        $cekGinjal = CekGinjal::create($validated);

        return redirect()->route('cek-ginjal.hasil-cek', ['id' => $cekGinjal->cek_id]);
    }

    public function hasilCek($id)
    {
        $userHistories = CekGinjal::where('user_id', Auth::id())->get();

        return view('cek-ginjal.hasil-cek', compact('userHistories'));
    }

    private function classifyData($data)
    {
        // Contoh logika klasifikasi sederhana. Sesuaikan dengan kebutuhan bisnis Anda.
        if ($data['bu'] > 50 || $data['sc'] === 'yes') {
            return 'ckd';
        }
        return 'normal';
    }
}
