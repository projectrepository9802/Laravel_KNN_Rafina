@extends('Admin.Layouts.main')

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/rowreorder/1.2.8/css/rowReorder.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.dataTables.min.css">
@endsection

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
            <div class="card-header bg-primary bg-gradient">
                <h6 class="card-title p-0 m-0 fw-bold text-white">
                    <i class="fas fa-info-circle me-1"></i>
                    Informasi {{ $titlePage }}
                </h6>
            </div>
            <div class="card-body">
                @if (session()->has('successMessage'))
                    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                        <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                            <path
                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                        </symbol>
                        <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
                            <path
                                d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
                        </symbol>
                        <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                            <path
                                d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                        </symbol>
                    </svg>
                    <div class="alert alert-success alert-dismissible d-flex align-items-center fade show" role="alert">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                            <use xlink:href="#check-circle-fill" />
                        </svg>
                        <div>
                            {{ session('successMessage') }}
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <table class="table table-bordered" id="dataTable" style="width: 100%;">
                    <thead class="bg-primary bg-gradient">
                        <tr class="text-white text-center">
                            <th class="align-middle text-center">No.</th>
                            <th class="align-middle text-center">Tanggal dan Jam Diagnosa</th>
                            <th class="align-middle text-center">Kode Pasien</th>
                            <th class="align-middle text-center">Nama Pasien</th>
                            <th class="align-middle text-center">Gejala Pasien</th>
                            <th class="align-middle text-center">Hasil Diagnosa</th>
                            <th class="align-middle text-center"></th>
                        </tr>
                    </thead>
                    <tbody class="bg-secondary bg-gradient text-white">
                        @php
                            $i = 1;
                        @endphp
                        @foreach ($dataRiwayatPasien as $pasien)
                            <tr class="text-white">
                                <td class="align-middle text-center">{{ $i }}</td>
                                <td class="align-middle text-center">{{ $pasien->tanggal_jam_diagnosa }}</td>
                                <td class="align-middle text-center">{{ $pasien->kode_pasien }}</td>
                                <td class="align-middle text-center">{{ $pasien->nama_pasien }}</td>
                                <td class="align-middle">
                                    <ul>
                                        @foreach (json_decode($pasien->gejala_pasien) as $key => $value)
                                            <li>
                                                <p style="text-align: justify;">
                                                    {{ $value->nama_gejala }}
                                                </p>
                                            </li>
                                        @endforeach
                                    </ul>
                                </td>
                                <td class="align-middle text-center">{{ $pasien->hasil_diagnosa }}</td>
                                <td class="align-middle text-center">
                                    <a href="{{ URL::to('data-riwayat-pasien/' . $pasien->id_pasien) }}"
                                        class="btn btn-primary">
                                        <i class="fas fa-eye me-1"></i>
                                        Lihat Data
                                    </a>
                                    <form action="{{ URL::to('data-riwayat-pasien/' . $pasien->id_pasien) }}"
                                        method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit">
                                            <i class="fas fa-trash me-1"></i>
                                            Hapus Data
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @php
                                $i++;
                            @endphp
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/rowreorder/1.2.8/js/dataTables.rowReorder.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
    <script>
        $(document).ready(() => {
            var table = $('#dataTable').DataTable({
                rowReorder: {
                    selector: 'td:nth-child(2)'
                },
                responsive: true
            });
        });
    </script>
@endsection
