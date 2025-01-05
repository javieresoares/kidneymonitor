@extends('layouts.app')

@section('content')
    <div class="page-header">
        <h3 class="page-title">Cek Ginjal</h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Cek Ginjal</a></li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Form Cek Ginjal</h4>
                    <form class="form-sample" action="{{ route('cek-ginjal.store') }}" method="POST">
                        @csrf
                        <p class="card-description"> Silahkan isi form cek ginjal dengan data berikut! </p>

                        <!-- BP and BGR Fields -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">BP (Blood Pressure)</label>
                                    <div class="col-sm-9">
                                        <input type="number" name="bp" class="form-control" min="0"
                                            step="0.01" placeholder="Contoh: 120" required />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">BGR (Blood Glucose Random)</label>
                                    <div class="col-sm-9">
                                        <input type="number" name="bgr" class="form-control" min="0"
                                            step="0.01" placeholder="Contoh: 150" required />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- RC and SG Fields -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">RC (Red Blood Cells)</label>
                                    <div class="col-sm-9">
                                        <input type="number" name="rc" class="form-control" min="0"
                                            step="0.01" placeholder="Contoh: 4.5" required />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">SG (Specific Gravity)</label>
                                    <div class="col-sm-9">
                                        <input type="number" name="sg" class="form-control" min="0"
                                            step="0.01" placeholder="Contoh: 1.020" required />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- BU and HTN Fields -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">BU (Blood Urea)</label>
                                    <div class="col-sm-9">
                                        <input type="number" name="bu" class="form-control" min="0"
                                            step="0.01" placeholder="Contoh: 50" required />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">HTN (Hypertension)</label>
                                    <div class="col-sm-9">
                                        <input type="number" name="htn" class="form-control" min="0"
                                            step="0.01" placeholder="Contoh: 1 untuk Yes, 0 untuk No" required />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- AL and SC Fields -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">AL (Albumin)</label>
                                    <div class="col-sm-9">
                                        <input type="number" name="al" class="form-control" min="0"
                                            step="0.01" placeholder="Contoh: 3.5" required />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">SC (Serum Creatinine)</label>
                                    <div class="col-sm-9">
                                        <input type="number" name="sc" class="form-control" min="0"
                                            step="0.01" placeholder="Contoh: 1.2" required />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- DM and SU Fields -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">DM (Diabetes Mellitus)</label>
                                    <div class="col-sm-9">
                                        <input type="number" name="dm" class="form-control" min="0"
                                            step="1" placeholder="Contoh: 1 untuk Yes, 0 untuk No" required />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">SU (Sugar)</label>
                                    <div class="col-sm-9">
                                        <input type="number" name="su" class="form-control" min="0"
                                            step="0.01" placeholder="Contoh: 2" required />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- SOD and CAD Fields -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">SOD (Sodium)</label>
                                    <div class="col-sm-9">
                                        <input type="number" name="sod" class="form-control" min="0"
                                            step="0.01" placeholder="Contoh: 135" required />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">CAD (Coronary Artery Disease)</label>
                                    <div class="col-sm-9">
                                        <input type="number" name="cad" class="form-control" min="0"
                                            max="1" step="1" placeholder="1 untuk Yes, 0 untuk No"
                                            required />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- RBC and POT Fields -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">RBC (Red Blood Cells)</label>
                                    <div class="col-sm-9">
                                        <input type="number" name="rbc" class="form-control" min="0"
                                            step="0.01" placeholder="Contoh: 4.5" required />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">POT (Potassium)</label>
                                    <div class="col-sm-9">
                                        <input type="number" name="pot" class="form-control" min="0"
                                            step="0.01" placeholder="Contoh: 3.5" required />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- APPET and PC Fields -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">APPET (Appetite)</label>
                                    <div class="col-sm-9">
                                        <input type="number" name="appet" class="form-control" min="0"
                                            max="1" step="1" placeholder="1 untuk Good, 0 untuk Poor"
                                            required />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">PC (Pus Cell)</label>
                                    <div class="col-sm-9">
                                        <input type="number" name="pc" class="form-control" min="0"
                                            step="0.01" placeholder="Contoh: 1.2" required />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- HEMO and PE Fields -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">HEMO (Hemoglobin)</label>
                                    <div class="col-sm-9">
                                        <input type="number" name="hemo" class="form-control" min="0"
                                            step="0.01" placeholder="Contoh: 13.5" required />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">PE (Pedal Edema)</label>
                                    <div class="col-sm-9">
                                        <input type="number" name="pe" class="form-control" min="0"
                                            max="1" step="1" placeholder="1 untuk Yes, 0 untuk No"
                                            required />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- PCC and PVC Fields -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">PCC (Pus Cell Clumps)</label>
                                    <div class="col-sm-9">
                                        <input type="number" name="pcc" class="form-control" min="0"
                                            step="0.01" placeholder="Contoh: 1.2" required />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">PVC (Packed Cell Volume)</label>
                                    <div class="col-sm-9">
                                        <input type="number" name="pvc" class="form-control" min="0"
                                            step="0.01" placeholder="Contoh: 45" required />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- ANE and BA Fields -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">ANE (Anemia)</label>
                                    <div class="col-sm-9">
                                        <input type="number" name="ane" class="form-control" min="0"
                                            max="1" step="1" placeholder="1 untuk Yes, 0 untuk No"
                                            required />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">BA (Bacteria)</label>
                                    <div class="col-sm-9">
                                        <input type="number" name="ba" class="form-control" min="0"
                                            step="0.01" placeholder="Contoh: 0 atau 1" required />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- WC Field -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">WC (White Blood Cells)</label>
                                    <div class="col-sm-9">
                                        <input type="number" name="wc" class="form-control" min="0"
                                            step="0.01" placeholder="Contoh: 8000" required />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <button type="reset" class="btn btn-dark">Reset</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- <script>
        document.getElementById('cek-ginjal-form').addEventListener('submit', function(event) {
            event.preventDefault();

            let formData = new FormData(this);
            let data = {};
            formData.forEach((value, key) => {
                data[key] = value;
            });

            fetch('{{ route('cek-ginjal.store') }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                    },
                    body: JSON.stringify(data)
                })
                .then(response => response.json())
                .then(data => {
                    if (data.classification) {
                        document.getElementById('classification-result').innerText = data.classification;
                        document.getElementById('result').style.display = 'block';
                        document.getElementById('view-result-link').href = '/cek-ginjal/hasil-cek/' + data.id;
                    } else {
                        alert('Gagal mendapatkan prediksi.');
                    }
                })
                .catch(error => {
                    alert('Terjadi kesalahan: ' + error);
                });
        });
    </script> --}}
@endsection
