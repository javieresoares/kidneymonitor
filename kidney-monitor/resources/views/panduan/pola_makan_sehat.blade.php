@extends('layouts.app')

@section('content')
    <div class="page-header">
        <h3 class="page-title">Panduan Pola Makan Sehat</h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('panduan.index') }}">Panduan Kesehatan</a></li>
                <li class="breadcrumb-item active" aria-current="page">Pola Makan Sehat</li>
            </ol>
        </nav>
    </div>

    <div class="row">
        <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Kenapa Pola Makan Sehat Itu Penting?</h4>
                    <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                        <div class="text-md-center text-xl-left">
                            <h6 class="mb-1">Meningkatkan Kesehatan Tubuh</h6>
                            <p class="text-muted mb-0">Pola makan sehat mendukung tubuh Anda agar tetap bugar, meningkatkan
                                energi, dan mengurangi risiko penyakit.</p>
                        </div>
                    </div>
                    <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                        <div class="text-md-center text-xl-left">
                            <h6 class="mb-1">Menjaga Berat Badan Ideal</h6>
                            <p class="text-muted mb-0">Dengan pola makan yang tepat, Anda dapat mempertahankan berat badan
                                yang sehat dan terhindar dari obesitas.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-8 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-row justify-content-between">
                        <h4 class="card-title mb-1">Panduan Pola Makan Sehat</h4>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="preview-list">
                                <!-- Panduan 1: Konsumsi Makanan Bergizi -->
                                <div class="preview-item border-bottom">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-primary">
                                            <i class="mdi mdi-food-apple"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content d-sm-flex flex-grow">
                                        <div class="flex-grow">
                                            <h6 class="preview-subject">Konsumsi Makanan Bergizi</h6>
                                            <p class="text-muted mb-0">Pastikan Anda mengonsumsi makanan dengan gizi
                                                seimbang, seperti protein, karbohidrat, lemak sehat, vitamin, dan mineral.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Panduan 2: Porsi Makan yang Tepat -->
                                <div class="preview-item border-bottom">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-success">
                                            <i class="mdi mdi-thumb-up"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content d-sm-flex flex-grow">
                                        <div class="flex-grow">
                                            <h6 class="preview-subject">Porsi Makan yang Tepat</h6>
                                            <p class="text-muted mb-0">Perhatikan porsi makan Anda. Makan dalam jumlah yang
                                                cukup sesuai dengan kebutuhan tubuh Anda tanpa berlebihan.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Panduan 3: Hindari Makanan Cepat Saji -->
                                <div class="preview-item border-bottom">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-danger">
                                            <i class="mdi mdi-food-fork-drink"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content d-sm-flex flex-grow">
                                        <div class="flex-grow">
                                            <h6 class="preview-subject">Hindari Makanan Cepat Saji</h6>
                                            <p class="text-muted mb-0">Kurangi konsumsi makanan cepat saji yang tinggi
                                                kalori, lemak jenuh, dan gula. Pilih makanan sehat dan segar sebagai
                                                gantinya.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Panduan 4: Minum Air Putih yang Cukup -->
                                <div class="preview-item border-bottom">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-warning">
                                            <i class="mdi mdi-water"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content d-sm-flex flex-grow">
                                        <div class="flex-grow">
                                            <h6 class="preview-subject">Minum Air Putih yang Cukup</h6>
                                            <p class="text-muted mb-0">Pastikan tubuh Anda terhidrasi dengan baik. Minum air
                                                putih minimal 8 gelas per hari untuk menjaga metabolisme tubuh.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Panduan 5: Kurangi Konsumsi Gula dan Garam -->
                                <div class="preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-info">
                                            <i class="mdi mdi-food-off"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content d-sm-flex flex-grow">
                                        <div class="flex-grow">
                                            <h6 class="preview-subject">Kurangi Konsumsi Gula dan Garam</h6>
                                            <p class="text-muted mb-0">Batasi konsumsi gula dan garam yang berlebihan karena
                                                dapat meningkatkan risiko berbagai penyakit, seperti hipertensi dan
                                                diabetes.</p>
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
