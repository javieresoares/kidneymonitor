@extends('layouts.app')

@section('content')
    <div class="page-header">
        <h3 class="page-title">Edit Riwayat</h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('riwayat.index') }}">Riwayat</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit</li>
            </ol>
        </nav>
    </div>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Data Pribadi</h4>
                    <p class="card-description">Form Edit Data Pribadi</p>
                    <form action="{{ route('riwayat.edit') }}" method="POST">
                        @csrf
                        <!-- Golongan Darah -->
                        <div class="form-group row">
                            <label for="bloodType" class="col-sm-3 col-form-label">Golongan Darah</label>
                            <div class="col-sm-9">
                                <select class="form-control" id="bloodType" name="golongan_darah" required>
                                    <option value="">Pilih Golongan Darah</option>
                                    <option value="A"
                                        {{ old('golongan_darah', $userData->golongan_darah) == 'A' ? 'selected' : '' }}>A
                                    </option>
                                    <option value="B"
                                        {{ old('golongan_darah', $userData->golongan_darah) == 'B' ? 'selected' : '' }}>B
                                    </option>
                                    <option value="AB"
                                        {{ old('golongan_darah', $userData->golongan_darah) == 'AB' ? 'selected' : '' }}>AB
                                    </option>
                                    <option value="O"
                                        {{ old('golongan_darah', $userData->golongan_darah) == 'O' ? 'selected' : '' }}>O
                                    </option>
                                </select>
                            </div>
                        </div>

                        <!-- Riwayat Penyakit -->
                        <div class="form-group row">
                            <label for="medicalHistory" class="col-sm-3 col-form-label">Riwayat Penyakit</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" id="medicalHistory" name="riwayat_penyakit" rows="3">{{ old('riwayat_penyakit', $userData->riwayat_penyakit) }}</textarea>
                            </div>
                        </div>

                        <!-- Riwayat Obat -->
                        <div class="form-group row">
                            <label for="medicationHistory" class="col-sm-3 col-form-label">Riwayat Obat</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" id="medicationHistory" name="riwayat_obat" rows="3">{{ old('riwayat_obat', $userData->riwayat_obat) }}</textarea>
                            </div>
                        </div>

                        <!-- Tombol Update -->
                        <div class="form-group row">
                            <div class="col-sm-12 d-flex justify-content-start">
                                <button type="submit" class="btn btn-warning mr-2">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
