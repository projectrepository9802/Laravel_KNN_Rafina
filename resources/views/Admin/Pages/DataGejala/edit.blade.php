@extends('Admin.Layouts.main')

@section('content-wrapper')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800 font-weight-bold">
                <i class="fas fa-hand-holding-medical me-1"></i>
                {{ $titlePage }}
            </h1>
        </div>

        <div class="card">
            <div class="card-header bg-primary bg-gradient">
                <h6 class="card-title p-0 m-0 fw-bold text-white">
                    <i class="fas fa-edit me-1"></i>
                    Ubah {{ $titlePage }}
                </h6>
            </div>
            <div class="card-body">
                <form action="{{ URL::to('data-gejala/' . $dataGejala->id_gejala) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="kode_gejala" class="form-label">Kode Gejala</label>
                        <input type="text" class="form-control @error('kode_gejala') is-invalid @enderror" id="kode_gejala"
                            name="kode_gejala" placeholder="Masukkan Kode Gejala..."
                            value="{{ old('kode_gejala', $dataGejala->kode_gejala) }}" autofocus>
                        @error('kode_gejala')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="nama_gejala" class="form-label">Nama Gejala</label>
                        <input type="text" class="form-control @error('nama_gejala') is-invalid @enderror" id="nama_gejala"
                            name="nama_gejala" placeholder="Masukkan Nama Gejala..."
                            value="{{ old('nama_gejala', $dataGejala->nama_gejala) }}">
                        @error('nama_gejala')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button type="submit" class="btn btn-success me-md-2">
                            <i class="fas fa-save me-1"></i>
                            Simpan Data
                        </button>
                        <button type="reset" class="btn btn-secondary">
                            <i class="fas fa-ban me-1"></i>
                            Cancel Data
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
