@extends('Admin.Layouts.main')

@section('content-wrapper')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800 font-weight-bold">
                <i class="fas fa-user-md me-1"></i>
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
                <form action="{{ URL::to('data-basis-pengetahuan') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="id_penyakit" class="form-label">Nama Penyakit</label>
                        <select class="form-select @error('id_penyakit') is-invalid @enderror" name="id_penyakit"
                            id="id_penyakit">
                            <option selected disabled>Pilih Nama Penyakit...</option>
                            @foreach ($dataPenyakit as $penyakit)
                                @if (old('id_penyakit') == $penyakit->id_penyakit)
                                    <option value="{{ $penyakit->id_penyakit }}" selected>
                                        {{ $penyakit->kode_penyakit . ' - ' . $penyakit->nama_penyakit }}
                                    </option>
                                @else
                                    <option value="{{ $penyakit->id_penyakit }}">
                                        {{ $penyakit->kode_penyakit . ' - ' . $penyakit->nama_penyakit }}
                                    </option>
                                @endif
                            @endforeach
                        </select>
                        @error('id_penyakit')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="id_gejala" class="form-label">Nama Gejala</label>
                        <select class="form-select @error('id_gejala') is-invalid @enderror" name="id_gejala"
                            id="id_gejala">
                            <option selected disabled>Pilih Nama Gejala...</option>
                            @foreach ($dataGejala as $gejala)
                                @if (old('id_gejala') == $gejala->id_gejala)
                                    <option value="{{ $gejala->id_gejala }}" selected>
                                        {{ $gejala->kode_gejala . ' - ' . $gejala->nama_gejala }}
                                    </option>
                                @else
                                    <option value="{{ $gejala->id_gejala }}">
                                        {{ $gejala->kode_gejala . ' - ' . $gejala->nama_gejala }}
                                    </option>
                                @endif
                            @endforeach
                        </select>
                        @error('id_gejala')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="nilai_bobot" class="form-label">Nilai Bobot</label>
                        <input type="text" class="form-control @error('nilai_bobot') is-invalid @enderror"
                            id="nilai_bobot" name="nilai_bobot" placeholder="Masukkan Nilai Bobot..."
                            value="{{ old('nilai_bobot') }}">
                        @error('nilai_bobot')
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

@section('js')
    <script>
        $(document).ready(() => {
            $("#nilai_bobot").keypress(function(event) {
                if ((event.which != 46 || $(this).val().indexOf('.') != -1) && (event.which < 48 || event
                        .which > 57)) {
                    event.preventDefault();
                }
            });
        });
    </script>
@endsection
