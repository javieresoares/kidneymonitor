@extends('layouts.app')

@section('content')
    <div class="page-header">
        <h3 class="page-title">Panduan Manajemen Stres</h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('panduan.index') }}">Panduan Kesehatan</a></li>
                <li class="breadcrumb-item active" aria-current="page">Manajemen Stres</li>
            </ol>
        </nav>
    </div>

    <div class="row">
        <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Mengapa Manajemen Stres Itu Penting?</h4>
                    <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                        <div class="text-md-center text-xl-left">
                            <h6 class="mb-1">Dampak Stres pada Kesehatan</h6>
                            <p class="text-muted mb-0">Stres yang berlebihan dapat memengaruhi fisik dan mental, menyebabkan
                                gangguan tidur, kecemasan, dan masalah kesehatan lainnya.</p>
                        </div>
                    </div>
                    <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                        <div class="text-md-center text-xl-left">
                            <h6 class="mb-1">Tujuan Manajemen Stres</h6>
                            <p class="text-muted mb-0">Mengelola stres dapat meningkatkan kesejahteraan emosional,
                                meningkatkan produktivitas, dan menjaga keseimbangan hidup.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-8 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-row justify-content-between">
                        <h4 class="card-title mb-1">Panduan Mengelola Stres</h4>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="preview-list">
                                <!-- Panduan 1: Teknik Relaksasi -->
                                <div class="preview-item border-bottom">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-primary">
                                            <i class="mdi mdi-seat-individual-suite"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content d-sm-flex flex-grow">
                                        <div class="flex-grow">
                                            <h6 class="preview-subject">Teknik Relaksasi</h6>
                                            <p class="text-muted mb-0">Cobalah teknik relaksasi seperti meditasi, pernapasan
                                                dalam, atau yoga untuk menenangkan tubuh dan pikiran.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Panduan 2: Olahraga -->
                                <div class="preview-item border-bottom">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-success">
                                            <i class="mdi mdi-run"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content d-sm-flex flex-grow">
                                        <div class="flex-grow">
                                            <h6 class="preview-subject">Olahraga Teratur</h6>
                                            <p class="text-muted mb-0">Olahraga dapat meredakan ketegangan fisik akibat
                                                stres. Lakukan aktivitas fisik seperti jogging atau berjalan kaki.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Panduan 3: Ciptakan Waktu untuk Diri Sendiri -->
                                <div class="preview-item border-bottom">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-danger">
                                            <i class="mdi mdi-timer-sand"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content d-sm-flex flex-grow">
                                        <div class="flex-grow">
                                            <h6 class="preview-subject">Ciptakan Waktu untuk Diri Sendiri</h6>
                                            <p class="text-muted mb-0">Luangkan waktu untuk diri sendiri, lakukan aktivitas
                                                yang Anda nikmati, seperti membaca buku atau mendengarkan musik.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Panduan 4: Tidur yang Cukup -->
                                <div class="preview-item border-bottom">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-warning">
                                            <i class="mdi mdi-sleep"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content d-sm-flex flex-grow">
                                        <div class="flex-grow">
                                            <h6 class="preview-subject">Tidur yang Cukup</h6>
                                            <p class="text-muted mb-0">Tidur yang cukup sangat penting dalam mengelola
                                                stres, karena membantu tubuh dan pikiran pulih dan menyegarkan energi.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Panduan 5: Berbicara dengan Seseorang -->
                                <div class="preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-info">
                                            <i class="mdi mdi-message"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content d-sm-flex flex-grow">
                                        <div class="flex-grow">
                                            <h6 class="preview-subject">Berbicara dengan Seseorang</h6>
                                            <p class="text-muted mb-0">Terkadang berbicara dengan teman, keluarga, atau
                                                seorang profesional bisa membantu meredakan perasaan stres.</p>
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
