@extends('Admin.Layouts.main')

@section('content-wrapper')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800 font-weight-bold">
                <i class="fas fa-history me-1"></i>
                {{ $titlePage }}
            </h1>
        </div>

        <div class="card">
            <div class="card-header bg-primary bg-gradient d-flex justify-content-between">
                <h6 class="card-title p-0 m-0 fw-bold text-white py-3">
                    <i class="fas fa-info-circle me-1"></i>
                    {{ $titlePage }}
                </h6>
                <button class="btn btn-success" onclick="window.print();">
                    <i class="fas fa-print me-1"></i>
                    Print Hasil Diagnosa
                </button>
            </div>
            <div class="card-body">
                <div class="row mb-2">
                    <div class="col-sm-4">
                        <p class="p-0 m-0"><strong>Tanggal/Jam Diagnosa</strong> :
                            {{ $dataPasien->tanggal_jam_diagnosa }}
                        </p>
                    </div>
                    <div class="col-sm-4 text-center">
                        <p class="p-0 m-0"><strong>Kode Pasien</strong> :
                            {{ $dataPasien->kode_pasien }}
                        </p>
                    </div>
                    <div class="col-sm-4 text-end">
                        <p class="p-0 m-0"><strong>Nama Pasien</strong> :
                            {{ $dataPasien->nama_pasien }}
                        </p>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-sm-4">
                        <p class="p-0 m-0"><strong>Nama Penyakit</strong> :
                            {{ $dataPasien->hasil_diagnosa }}
                        </p>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-header bg-success bg-gradient">
                        <p class="p-0 m-0 fw-bold card-title text-white">Gejala Pasien</p>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered" style="width: 100%;">
                            <colgroup>
                                <col style="width: 5%;">
                                <col style="width: 15%;">
                                <col style="width: 80%;">
                            </colgroup>
                            <thead class="bg-success bg-gradient text-white">
                                <tr>
                                    <th class="align-middle text-center">No.</th>
                                    <th class="align-middle text-center">Kode Gejala</th>
                                    <th class="align-middle text-center">Nama Gejala</th>
                                </tr>
                            </thead>
                            <tbody class="bg-secondary bg-gradient text-white">
                                @php
                                    $i = 1;
                                @endphp
                                @foreach (json_decode($dataPasien->gejala_pasien) as $gejala)
                                    <tr>
                                        <td class="align-middle text-center">{{ $i }}</td>
                                        <td class="align-middle text-center">{{ $gejala->kode_gejala }}</td>
                                        <td class="align-middle">{{ $gejala->nama_gejala }}</td>
                                    </tr>
                                    @php
                                        $i++;
                                    @endphp
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <a href="{{ URL::to('data-riwayat-pasien') }}" class="btn btn-primary">
                    <i class="fas fa-arrow-alt-circle-left me-1"></i>
                    Kembali Ke Halaman Data Riwayat Pasien
                </a>
            </div>
        </div>
    </div>
@endsection
