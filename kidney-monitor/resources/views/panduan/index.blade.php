@extends('layouts.app')

@section('content')
    <div class="page-header">
        <h3 class="page-title">Panduan Kesehatan</h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('homepage') }}">Panduan Kesehatan</a></li>
            </ol>
        </nav>
    </div>

    <div class="row">
        <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Panduan Kesehatan</h4>
                    <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                        <div class="text-md-center text-xl-left">
                            <h6 class="mb-1">Panduan Kesehatan Umum</h6>
                            <p class="text-muted mb-0">Tips umum untuk menjaga kesehatan tubuh.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-8 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-row justify-content-between">
                        <h4 class="card-title mb-1">Panduan Kesehatan</h4>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="preview-list">
                                <!-- Tips Aktivitas Fisik -->
                                <div class="preview-item border-bottom">
                                    <div class="preview-thumbnail">
                                        <a href="{{ route('panduan.aktivitas_fisik') }}">
                                            <div class="preview-icon bg-primary text-white">
                                                <i class="mdi mdi-football"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="preview-item-content d-sm-flex flex-grow">
                                        <div class="flex-grow">
                                            <h6 class="preview-subject">Tips Aktivitas Fisik</h6>
                                            <p class="text-muted mb-0">Panduan untuk menjaga tubuh tetap aktif dengan
                                                olahraga.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Tips Pola Makan Sehat -->
                                <div class="preview-item border-bottom">
                                    <div class="preview-thumbnail">
                                        <a href="{{ route('panduan.pola_makan_sehat') }}">
                                            <div class="preview-icon bg-success text-white">
                                                <i class="mdi mdi-silverware-variant"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="preview-item-content d-sm-flex flex-grow">
                                        <div class="flex-grow">
                                            <h6 class="preview-subject">Tips Pola Makan Sehat</h6>
                                            <p class="text-muted mb-0">Pentingnya makan dengan pola yang sehat untuk menjaga
                                                tubuh.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Manajemen Berat Badan -->
                                <div class="preview-item border-bottom">
                                    <div class="preview-thumbnail">
                                        <a href="{{ route('panduan.berat_badan') }}">
                                            <div class="preview-icon bg-danger text-white">
                                                <i class="mdi mdi-weight"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="preview-item-content d-sm-flex flex-grow">
                                        <div class="flex-grow">
                                            <h6 class="preview-subject">Manajemen Berat Badan</h6>
                                            <p class="text-muted mb-0">Tips untuk mengelola berat badan secara sehat.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Manajemen Stress -->
                                <div class="preview-item border-bottom">
                                    <div class="preview-thumbnail">
                                        <a href="{{ route('panduan.manajemen_stress') }}">
                                            <div class="preview-icon bg-warning text-white">
                                                <i class="mdi mdi-seat-individual-suite"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="preview-item-content d-sm-flex flex-grow">
                                        <div class="flex-grow">
                                            <h6 class="preview-subject">Manajemen Stress</h6>
                                            <p class="text-muted mb-0">Teknik mengelola stress dengan baik agar tubuh tetap
                                                sehat.</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
