@extends('layouts.app')

@section('content')
    <div class="page-header">
        <h3 class="page-title">Riwayat</h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('homepage') }}">Riwayat</a></li>
            </ol>
        </nav>
    </div>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Pribadi</h4>
                    <p class="card-description">Form Data Pribadi</p>
                    <form action="{{ route('riwayat.save') }}" method="POST">
                        @csrf
                        <!-- Golongan Darah -->
                        <div class="form-group row">
                            <label for="bloodType" class="col-sm-3 col-form-label">Golongan Darah</label>
                            <div class="col-sm-9">
                                <select class="form-control" id="bloodType" name="golongan_darah" required>
                                    <option value="">Pilih Golongan Darah</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="AB">AB</option>
                                    <option value="O">O</option>
                                </select>
                            </div>
                        </div>

                        <!-- Riwayat Penyakit -->
                        <div class="form-group row">
                            <label for="medicalHistory" class="col-sm-3 col-form-label">Riwayat Penyakit</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" id="medicalHistory" name="riwayat_penyakit" rows="3"></textarea>
                            </div>
                        </div>

                        <!-- Riwayat Obat -->
                        <div class="form-group row">
                            <label for="medicationHistory" class="col-sm-3 col-form-label">Riwayat Obat</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" id="medicationHistory" name="riwayat_obat" rows="3"></textarea>
                            </div>
                        </div>

                        <!-- Tombol Save -->
                        <div class="form-group row">
                            <div class="col-sm-12 d-flex justify-content-start">
                                <button type="submit" class="btn btn-primary mr-2">Save</button>

                                <!-- Tombol Edit, Hapus jika data sudah ada -->
                                @if ($userData)
                                    <form action="{{ route('riwayat.edit') }}" method="POST" style="display:inline-block;">
                                        @csrf
                                        <button type="submit" class="btn btn-warning mr-2">Edit</button>
                                    </form>

                                    <form action="{{ route('riwayat.delete') }}" method="POST"
                                        style="display:inline-block;">
                                        @csrf
                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                    </form>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- <!-- Riwayat -->
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Riwayat Cek</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama</th>
                                    <th>Status</th>
                                    <th>Created At</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($userHistories as $history)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $history->user->name }}</td>
                                        <td>{{ $history->status }}</td>
                                        <td>{{ $history->created_at->format('d M Y') }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="text-center">Tidak ada data</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
