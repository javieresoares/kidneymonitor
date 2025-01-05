@extends('layouts.app')

@section('content')
    <div class="page-header">
        <h3 class="page-title">Panduan Manajemen Berat Badan</h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('panduan.index') }}">Panduan Kesehatan</a></li>
                <li class="breadcrumb-item active" aria-current="page">Manajemen Berat Badan</li>
            </ol>
        </nav>
    </div>

    <div class="row">
        <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Manajemen Berat Badan yang Sehat</h4>
                    <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                        <div class="text-md-center text-xl-left">
                            <h6 class="mb-1">Mengapa Berat Badan Penting</h6>
                            <p class="text-muted mb-0">Berat badan yang sehat mendukung kesehatan jantung, metabolisme, dan
                                daya tahan tubuh.</p>
                        </div>
                    </div>
                    <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                        <div class="text-md-center text-xl-left">
                            <h6 class="mb-1">Manfaat Mempertahankan Berat Badan Ideal</h6>
                            <p class="text-muted mb-0">Meningkatkan energi, memperbaiki kualitas tidur, dan meningkatkan
                                kepercayaan diri.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-8 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-row justify-content-between">
                        <h4 class="card-title mb-1">Panduan Menurunkan Berat Badan</h4>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="preview-list">
                                <!-- Panduan 1: Diet Seimbang -->
                                <div class="preview-item border-bottom">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-primary">
                                            <i class="mdi mdi-nutrition"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content d-sm-flex flex-grow">
                                        <div class="flex-grow">
                                            <h6 class="preview-subject">Diet Seimbang</h6>
                                            <p class="text-muted mb-0">Makan makanan yang kaya akan nutrisi dan seimbang,
                                                dengan banyak sayuran, buah-buahan, dan protein.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Panduan 2: Olahraga Teratur -->
                                <div class="preview-item border-bottom">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-success">
                                            <i class="mdi mdi-run"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content d-sm-flex flex-grow">
                                        <div class="flex-grow">
                                            <h6 class="preview-subject">Olahraga Teratur</h6>
                                            <p class="text-muted mb-0">Lakukan aktivitas fisik seperti jogging, bersepeda,
                                                atau berenang setidaknya 3-5 kali seminggu.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Panduan 3: Perbanyak Minum Air -->
                                <div class="preview-item border-bottom">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-warning">
                                            <i class="mdi mdi-water"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content d-sm-flex flex-grow">
                                        <div class="flex-grow">
                                            <h6 class="preview-subject">Perbanyak Minum Air</h6>
                                            <p class="text-muted mb-0">Air membantu tubuh tetap terhidrasi dan mendukung
                                                proses metabolisme yang sehat.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Panduan 4: Tidur Cukup -->
                                <div class="preview-item border-bottom">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-danger">
                                            <i class="mdi mdi-sleep"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content d-sm-flex flex-grow">
                                        <div class="flex-grow">
                                            <h6 class="preview-subject">Tidur Cukup</h6>
                                            <p class="text-muted mb-0">Tidur yang cukup membantu tubuh memulihkan energi dan
                                                menjaga keseimbangan hormon yang mendukung berat badan yang sehat.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Panduan 5: Hindari Stres Berlebihan -->
                                <div class="preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-info">
                                            <i class="mdi mdi-seat-individual-suite"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content d-sm-flex flex-grow">
                                        <div class="flex-grow">
                                            <h6 class="preview-subject">Hindari Stres Berlebihan</h6>
                                            <p class="text-muted mb-0">Stres dapat memicu makan berlebihan. Cobalah teknik
                                                relaksasi untuk mengurangi stres.</p>
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
