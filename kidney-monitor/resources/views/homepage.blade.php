@extends('layouts.app')

@section('content')
    <div class="page-header">
        <h3 class="page-title">Homepage</h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('homepage') }}">Homepage</a></li>
            </ol>
        </nav>
    </div>

    <!-- Categories -->
    <div class="row">
        <!-- Cek Ginjal -->
        <div class="col-sm-4 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h5>Cek Ginjal</h5>
                    <div class="row">
                        <div class="col-8 col-sm-12 col-xl-8 my-auto">
                            <div class="d-flex d-sm-block d-md-flex align-items-center">
                                <h3 class="mb-0">Pemeriksaan Ginjal</h3>
                            </div>
                            <h6 class="text-muted font-weight-normal mt-3">Penting untuk kesehatan ginjal</h6>
                        </div>
                        <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                            <i class="icon-lg mdi mdi-heart text-primary ml-auto"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Panduan Kesehatan -->
        <div class="col-sm-4 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h5>Panduan Kesehatan</h5>
                    <div class="row">
                        <div class="col-8 col-sm-12 col-xl-8 my-auto">
                            <div class="d-flex d-sm-block d-md-flex align-items-center">
                                <h3 class="mb-0">Panduan Sehat</h3>
                            </div>
                            <h6 class="text-muted font-weight-normal mt-3">Pahami cara menjaga kesehatan</h6>
                        </div>
                        <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                            <i class="icon-lg mdi mdi-nutrition text-danger ml-auto"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Riwayat -->
        <div class="col-sm-4 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h5>Riwayat</h5>
                    <div class="row">
                        <div class="col-8 col-sm-12 col-xl-8 my-auto">
                            <div class="d-flex d-sm-block d-md-flex align-items-center">
                                <h3 class="mb-0">Riwayat Kesehatan</h3>
                            </div>
                            <h6 class="text-muted font-weight-normal mt-3">Catatan medis penting untuk pemeriksaan!</h6>
                        </div>
                        <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                            <i class="icon-lg mdi mdi-pencil text-success ml-auto"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Description -->
    <div class="row">
        <div class="col-sm-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h3>Perhatikan Ginjal Anda, Dapatkan Hidup Lebih Baik!</h3>
                </div>
            </div>
        </div>
    </div>
@endsection
