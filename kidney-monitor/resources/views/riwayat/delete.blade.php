@extends('layouts.app')

@section('content')
    <div class="page-header">
        <h3 class="page-title">Hapus Riwayat</h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('riwayat.index') }}">Riwayat</a></li>
                <li class="breadcrumb-item active" aria-current="page">Hapus</li>
            </ol>
        </nav>
    </div>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Konfirmasi Penghapusan</h4>
                    <p class="card-description">Apakah Anda yakin ingin menghapus data riwayat ini?</p>

                    <!-- Form Hapus -->
                    <form action="{{ route('riwayat.delete') }}" method="POST">
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Golongan Darah</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" value="{{ $userData->golongan_darah }}" readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Riwayat Penyakit</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" rows="3" readonly>{{ $userData->riwayat_penyakit }}</textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Riwayat Obat</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" rows="3" readonly>{{ $userData->riwayat_obat }}</textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-12 d-flex justify-content-start">
                                <button type="submit" class="btn btn-danger mr-2">Hapus</button>
                                <a href="{{ route('riwayat.index') }}" class="btn btn-secondary">Batal</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
