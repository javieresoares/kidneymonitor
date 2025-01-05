@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4>Hasil Cek Ginjal</h4>
            </div>
            <div class="card-body">
                <h5>Data Pasien:</h5>
                <table class="table">
                    <tbody>
                        <tr>
                            <th>Tekanan Darah (BP)</th>
                            <td>{{ $cekGinjal->bp }}</td>
                        </tr>
                        <tr>
                            <th>Gula Darah Acak (BGR)</th>
                            <td>{{ $cekGinjal->bgr }}</td>
                        </tr>
                        <tr>
                            <th>Sel Darah Merah (RC)</th>
                            <td>{{ $cekGinjal->rc }}</td>
                        </tr>
                        <tr>
                            <th>Gravitasi Spesifik (SG)</th>
                            <td>{{ $cekGinjal->sg }}</td>
                        </tr>
                        <tr>
                            <th>Urea Darah (BU)</th>
                            <td>{{ $cekGinjal->bu }}</td>
                        </tr>
                        <tr>
                            <th>Hipertensi (HTN)</th>
                            <td>{{ $cekGinjal->htn == 'yes' ? 'Ya' : 'Tidak' }}</td>
                        </tr>
                        <tr>
                            <th>Albumin (AL)</th>
                            <td>{{ $cekGinjal->al }}</td>
                        </tr>
                        <tr>
                            <th>Gula (SU)</th>
                            <td>{{ $cekGinjal->su }}</td>
                        </tr>
                        <tr>
                            <th>Serum Kreatinin (SC)</th>
                            <td>{{ $cekGinjal->sc == 'yes' ? 'Ya' : 'Tidak' }}</td>
                        </tr>
                        <tr>
                            <th>Sodium (SOD)</th>
                            <td>{{ $cekGinjal->sod }}</td>
                        </tr>
                        <tr>
                            <th>Potassium (POT)</th>
                            <td>{{ $cekGinjal->pot }}</td>
                        </tr>
                        <tr>
                            <th>Sel Darah Merah (RBC)</th>
                            <td>{{ $cekGinjal->rbc == 'normal' ? 'Normal' : 'Abnormal' }}</td>
                        </tr>
                        <tr>
                            <th>Sel Pus (PC)</th>
                            <td>{{ $cekGinjal->pc == 'normal' ? 'Normal' : 'Abnormal' }}</td>
                        </tr>
                        <tr>
                            <th>Sel Pus Gumpalan (PCC)</th>
                            <td>{{ $cekGinjal->pcc == 'present' ? 'Ada' : 'Tidak Ada' }}</td>
                        </tr>
                        <tr>
                            <th>Bakteri (BA)</th>
                            <td>{{ $cekGinjal->ba == 'present' ? 'Ada' : 'Tidak Ada' }}</td>
                        </tr>
                        <tr>
                            <th>Hemoglobin (HEMO)</th>
                            <td>{{ $cekGinjal->hemo }}</td>
                        </tr>
                        <tr>
                            <th>Volume Sel Tertutup (PVC)</th>
                            <td>{{ $cekGinjal->pcv }}</td>
                        </tr>
                        <tr>
                            <th>Sel Darah Putih (WC)</th>
                            <td>{{ $cekGinjal->wc }}</td>
                        </tr>
                        <tr>
                            <th>Diabetes Mellitus (DM)</th>
                            <td>{{ $cekGinjal->dm == 'yes' ? 'Ya' : 'Tidak' }}</td>
                        </tr>
                        <tr>
                            <th>Penyakit Arteri Koroner (CAD)</th>
                            <td>{{ $cekGinjal->cad == 'yes' ? 'Ya' : 'Tidak' }}</td>
                        </tr>
                        <tr>
                            <th>Nafsu Makan (APPET)</th>
                            <td>{{ $cekGinjal->appet == 'good' ? 'Baik' : 'Buruk' }}</td>
                        </tr>
                        <tr>
                            <th>Edema (PE)</th>
                            <td>{{ $cekGinjal->pe == 'yes' ? 'Ya' : 'Tidak' }}</td>
                        </tr>
                        <tr>
                            <th>Anemia (ANE)</th>
                            <td>{{ $cekGinjal->ane == 'yes' ? 'Ya' : 'Tidak' }}</td>
                        </tr>
                        <tr>
                            <th>Diagnosa</th>
                            <td>{{ ucfirst($cekGinjal->classification) }}</td>
                        </tr>
                    </tbody>
                </table>

                <div class="alert alert-info" role="alert">
                    <h5><strong>Hasil Klasifikasi:</strong></h5>
                    <p>Pasien ini dinyatakan sebagai {{ ucfirst($cekGinjal->classification) }}.</p>
                </div>

                <a href="{{ route('cek-ginjal.index') }}" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </div>
@endsection
