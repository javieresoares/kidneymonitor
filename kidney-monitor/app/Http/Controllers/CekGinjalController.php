<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CekGinjal;
use Illuminate\Support\Facades\Http;  // Import HTTP client

class CekGinjalController extends Controller
{
    // Method to show the Cek Ginjal form
    public function index()
    {
        // Ambil ID pengguna saat ini (atau data lain yang diperlukan)
        $id = auth()->user()->id;

        // Kirim ID ke view
        return view('cek-ginjal.index', compact('id'));
    }

    // Method to store the form data into the database and call Flask API
    // public function store(Request $request)
    // {
    //     // Validasi input
    //     $request->validate([
    //         'bp' => 'required|numeric',
    //         'bgr' => 'required|numeric',
    //         'rc' => 'required|numeric',
    //         'sg' => 'required|numeric',
    //         'bu' => 'required|numeric',
    //         'htn' => 'required|numeric',
    //         'al' => 'required|numeric',
    //         'sc' => 'required|numeric',
    //         'dm' => 'required|numeric',
    //         'su' => 'required|numeric',
    //         'sod' => 'required|numeric',
    //         'cad' => 'required|numeric',
    //         'rbc' => 'required|numeric',
    //         'pot' => 'required|numeric',
    //         'appet' => 'required|numeric',
    //         'pc' => 'required|numeric',
    //         'hemo' => 'required|numeric',
    //         'pe' => 'required|numeric',
    //         'pcc' => 'required|numeric',
    //         'pvc' => 'required|numeric',
    //         'ane' => 'required|numeric',
    //         'ba' => 'required|numeric',
    //         'wc' => 'required|numeric',
    //     ]);

    //     // Kirim data ke API Flask
    //     $response = Http::post('http://127.0.0.1:5000/classify', [
    //         'bp' => $request->bp,
    //         'bgr' => $request->bgr,
    //         'rc' => $request->rc,
    //         'sg' => $request->sg,
    //         'bu' => $request->bu,
    //         'htn' => $request->htn,
    //         'al' => $request->al,
    //         'sc' => $request->sc,
    //         'dm' => $request->dm,
    //         'su' => $request->su,
    //         'sod' => $request->sod,
    //         'cad' => $request->cad,
    //         'rbc' => $request->rbc,
    //         'pot' => $request->pot,
    //         'appet' => $request->appet,
    //         'pc' => $request->pc,
    //         'hemo' => $request->hemo,
    //         'pe' => $request->pe,
    //         'pcc' => $request->pcc,
    //         'pvc' => $request->pvc,
    //         'ane' => $request->ane,
    //         'ba' => $request->ba,
    //         'wc' => $request->wc,
    //     ]);

    //     // Ambil data klasifikasi dari response
    //     $classification = $response->json()['classification'];

    //     // Simpan data ke database
    //     $cekGinjal = CekGinjal::create([
    //         'bp' => $request->bp,
    //         'bgr' => $request->bgr,
    //         'rc' => $request->rc,
    //         'sg' => $request->sg,
    //         'bu' => $request->bu,
    //         'htn' => $request->htn,
    //         'al' => $request->al,
    //         'sc' => $request->sc,
    //         'dm' => $request->dm,
    //         'su' => $request->su,
    //         'sod' => $request->sod,
    //         'cad' => $request->cad,
    //         'rbc' => $request->rbc,
    //         'pot' => $request->pot,
    //         'appet' => $request->appet,
    //         'pc' => $request->pc,
    //         'hemo' => $request->hemo,
    //         'pe' => $request->pe,
    //         'pcc' => $request->pcc,
    //         'pvc' => $request->pvc,
    //         'ane' => $request->ane,
    //         'ba' => $request->ba,
    //         'wc' => $request->wc,
    //         'classification' => $classification,
    //     ]);

    //     return response()->json([
    //         'message' => 'Data berhasil disimpan!',
    //         'classification' => $classification,
    //         'id' => $cekGinjal->id,
    //     ]);
    // }

    public function store(Request $request)
    {
        // Only allow these features to be sent
        $data = $request->only([
            'bp',
            'bgr',
            'rc',
            'sg',
            'bu',
            'htn',
            'al',
            'sc',
            'dm',
            'su',
            'sod',
            'cad',
            'rbc',
            'pot',
            'appet',
            'pc',
            'hemo',
            'pe',
            'pcc',
            'pvc',
            'ane',
            'ba',
            'wc'
        ]);

        try {
            // Send data to Flask API
            $response = Http::timeout(10)
                ->post('http://127.0.0.1:5000/classify', $data);

            if ($response->successful()) {
                // Return API response to client
                return response()->json($response->json());
            } else {
                return response()->json([
                    'error' => 'Error communicating with the Flask API',
                    'details' => $response->body()
                ], $response->status());
            }
        } catch (\Exception $e) {
            // Handle exceptions
            return response()->json([
                'error' => 'Internal server error',
                'details' => $e->getMessage()
            ], 500);
        }
    }

    // Method to show the result of Cek Ginjal
    public function show($id)
    {
        // Retrieve the data based on the ID
        $cekGinjal = CekGinjal::findOrFail($id);

        // Display the result page with the data
        return view('cek-ginjal.hasil-cek', compact('cekGinjal'));
    }
}
