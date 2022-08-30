@extends('Admin.Layouts.main')

@section('content-wrapper')
    <div class="container-fluid p-0 m-0 my-5 px-3">
        <h3 class="text-center mb-5 fw-bold">Hasil Diagnosa</h3>
        <div class="card">
            <div class="card-header bg-gradient-custom d-flex justify-content-between">
                <p class="card-title p-0 m-0 fw-bold text-white">Laman Hasil Diagnosa</p>
                <button class="btn btn-info" onclick="window.print();">
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
                            {{ json_decode(json_decode($dataPasien->hasil_diagnosa)->hasil_diagnosa)->nama_penyakit }}
                        </p>
                    </div>
                    <div class="col-sm-4">
                        <p class="p-0 m-0"><strong>Bobot Penyakit</strong> :
                            {{ json_decode($dataPasien->hasil_diagnosa)->bobot_diagnosa }}
                        </p>
                    </div>
                    <div class="col-sm-4">
                        <p class="p-0 m-0"><strong>Persentase Penyakit</strong> :
                            {{ json_decode($dataPasien->hasil_diagnosa)->persentase_diagnosa }} %
                        </p>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-header bg-gradient-custom">
                        <p class="p-0 m-0 fw-bold card-title text-white">Gejala Pasien</p>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered" style="width: 100%;">
                            <colgroup>
                                <col style="width: 5%;">
                                <col style="width: 15%;">
                                <col style="width: 80%;">
                            </colgroup>
                            <thead class="bg-gradient-custom">
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

                <div class="card mb-4">
                    <div class="card-header bg-gradient-custom">
                        <p class="p-0 m-0 fw-bold card-title text-white">Solusi Penyakit</p>
                    </div>
                    <div class="card-body">
                        <p style="text-align: justify;">
                            {{ json_decode(json_decode($dataPasien->hasil_diagnosa)->hasil_diagnosa)->solusi_penyakit }}
                        </p>
                    </div>
                </div>

                <a href="{{ URL::to('diagnosa') }}" class="btn btn-gradient-custom">
                    <i class="fas fa-arrow-alt-circle-left"></i>
                    Kembali Ke Halaman Diagnosa
                </a>
            </div>
        </div>
    </div>
@endsection
