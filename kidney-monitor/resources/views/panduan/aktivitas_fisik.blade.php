@extends('layouts.app')

@section('content')
    <div class="page-header">
        <h3 class="page-title">Panduan Aktivitas Fisik</h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('panduan.index') }}">Panduan Kesehatan</a></li>
                <li class="breadcrumb-item active" aria-current="page">Aktivitas Fisik</li>
            </ol>
        </nav>
    </div>

    <div class="row">
        <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Aktivitas Fisik yang Sehat</h4>
                    <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                        <div class="text-md-center text-xl-left">
                            <h6 class="mb-1">Pentingnya Aktivitas Fisik</h6>
                            <p class="text-muted mb-0">Olahraga secara rutin menjaga kesehatan tubuh dan meningkatkan
                                kualitas hidup.</p>
                        </div>
                    </div>
                    <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                        <div class="text-md-center text-xl-left">
                            <h6 class="mb-1">Manfaat Aktivitas Fisik</h6>
                            <p class="text-muted mb-0">Meningkatkan kesehatan jantung, menurunkan stres, dan menjaga berat
                                badan ideal.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-8 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-row justify-content-between">
                        <h4 class="card-title mb-1">Aktivitas Fisik yang Disarankan</h4>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="preview-list">
                                <!-- Aktivitas Fisik 1 -->
                                <div class="preview-item border-bottom">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-primary">
                                            <i class="mdi mdi-football"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content d-sm-flex flex-grow">
                                        <div class="flex-grow">
                                            <h6 class="preview-subject">Olahraga Sepak Bola</h6>
                                            <p class="text-muted mb-0">Olahraga yang menyenangkan dan melibatkan banyak otot
                                                tubuh.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Aktivitas Fisik 2 -->
                                <div class="preview-item border-bottom">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-success">
                                            <i class="mdi mdi-run"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content d-sm-flex flex-grow">
                                        <div class="flex-grow">
                                            <h6 class="preview-subject">Jogging Pagi</h6>
                                            <p class="text-muted mb-0">Berjalan atau berlari ringan di pagi hari dapat
                                                meningkatkan stamina tubuh.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Aktivitas Fisik 3 -->
                                <div class="preview-item border-bottom">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-danger">
                                            <i class="mdi mdi-bike"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content d-sm-flex flex-grow">
                                        <div class="flex-grow">
                                            <h6 class="preview-subject">Bersepeda</h6>
                                            <p class="text-muted mb-0">Bersepeda adalah olahraga kardio yang baik untuk
                                                kesehatan jantung.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Aktivitas Fisik 4 -->
                                <div class="preview-item border-bottom">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-warning">
                                            <i class="mdi mdi-swim"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content d-sm-flex flex-grow">
                                        <div class="flex-grow">
                                            <h6 class="preview-subject">Renang</h6>
                                            <p class="text-muted mb-0">Renang meningkatkan kekuatan otot dan memperbaiki
                                                pernapasan.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Aktivitas Fisik 5 -->
                                <div class="preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-info">
                                            <i class="mdi mdi-dumbbell"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content d-sm-flex flex-grow">
                                        <div class="flex-grow">
                                            <h6 class="preview-subject">Angkat Beban</h6>
                                            <p class="text-muted mb-0">Olahraga angkat beban untuk meningkatkan massa otot
                                                tubuh.</p>
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
