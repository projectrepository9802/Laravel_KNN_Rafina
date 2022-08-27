@extends('Admin.Layouts.main')

@section('content-wrapper')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800 font-weight-bold">
                <i class="fas fa-viruses me-1"></i>
                {{ $titlePage }}
            </h1>
        </div>

        <div class="card">
            <div class="card-header bg-gradient-custom">
                <h6 class="card-title p-0 m-0 fw-bold text-white">
                    <i class="fas fa-plus me-1"></i>
                    Tambah {{ $titlePage }}
                </h6>
            </div>
            <div class="card-body">
                <form action="{{ URL::to('data-penyakit') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="kode_penyakit" class="form-label">Kode Penyakit</label>
                        <input type="text" class="form-control @error('kode_penyakit') is-invalid @enderror"
                            id="kode_penyakit" name="kode_penyakit" placeholder="Masukkan Kode Penyakit..."
                            value="{{ old('kode_penyakit') }}" autofocus>
                        @error('kode_penyakit')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="nama_penyakit" class="form-label">Nama Penyakit</label>
                        <input type="text" class="form-control @error('nama_penyakit') is-invalid @enderror"
                            id="nama_penyakit" name="nama_penyakit" placeholder="Masukkan Nama Penyakit..."
                            value="{{ old('nama_penyakit') }}">
                        @error('nama_penyakit')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="solusi_penyakit" class="form-label">Solusi Penyakit</label>
                        <textarea class="form-control @error('solusi_penyakit') is-invalid @enderror" id="solusi_penyakit"
                            name="solusi_penyakit" rows="3" placeholder="Masukkan Solusi Penyakit...">{{ old('solusi_penyakit') }}</textarea>
                        @error('solusi_penyakit')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button type="submit" class="btn btn-gradient-custom me-md-2">
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
