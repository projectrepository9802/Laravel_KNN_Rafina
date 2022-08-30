@extends('Admin.Layouts.main')

@section('content-wrapper')
    <div class="container-fluid">
        <h3 class="text-center pt-2 fw-bold mb-4">Informasi Penyakit</h3>
        <div class="accordion mb-5 px-5 py-5 bg-gradient-custom rounded">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Apa itu Pneumonia?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p class="text-custom" style="text-align: justify;">
                            Pneumonia adalah salah satu jenis penyakit pada paru-paru yang dapat mengganggu fungsi dan kerja
                            organ ini. Pneumonia dapat menyerang satu atau bahkan lebih bagian paru-paru.
                        </p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                        Apa itu Tubercolosis?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p class="text-custom" style="text-align: justify;">
                            Tuberkulosis (TB) adalah penyakit paru-paru yang disebabkan oleh infeksi bakteri Mycbacterium
                            Tuberculosis. Bakteri ini tidak hanya menyerang paru-paru saja tapi bisa juga menyerang bagian
                            lainnya seperti tulang, ginjal dan sistem saraf pusat. Penyakit ini dapat menular dari dahak,
                            batuk ataupun bersin.
                        </p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                        Apa itu Asma?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p class="text-custom" style="text-align: justify;">
                            Asma adalah jenis penyakit jangka panjang atau kronis pada saluran pernapasan yang ditandai
                            dengan peradangan dan penyempitan saluran napas yang menimbulkan sesak atau sulit bernapas.
                        </p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                        Apa itu Penyakit Paru Obstruktif Kronis (PPOK) ?
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p class="text-custom" style="text-align: justify;">
                            Penyakit Paru Obstruktif Kronis adalah peradangan paru kronis yang memicu
                            terjadinya gangguan aliran udara, baik menuju paru-paru ataupun dari paru-paru itu sendiri.
                            Penyakit Paru Obstruktif Kronis dibagi menjadi dua yaitu Bronkitis kronis dan Emfiseme.
                        </p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                        Bukti Surat Riset
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body text-center">
                        <img class="img-fluid" src="{{ URL::to('bin/images/WhatsApp Image 2022-08-23 at 20.58.59.jpeg') }}"
                            alt="">
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingSix">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                        Bukti Data Penyakit
                    </button>
                </h2>
                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body text-center" style="height: 500px !important;">
                        <iframe
                            src="https://docs.google.com/document/d/e/2PACX-1vQFdUoupVcM2BQ1fXcEXRSO8IIjqtVFvkfXISxeckI8ZBBcsqwIj4-5gJETpzK3DW3sQcbRlAPv4xoS/pub?embedded=true"
                            style="width: 100%; height: 100%;"></iframe>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingSeven">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSix">
                        Pakar/Dokter
                    </button>
                </h2>
                <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ul>
                            <li><span class="fw-bold">Nama : </span> Dr.Hernni Maria, Sp.P</li>
                            <li><span class="fw-bold">Jenis Kelamin : </span> Perempuan</li>
                            <li><span class="fw-bold">Profesi : </span> Dokter Spesialis Paru</li>
                            <li><span class="fw-bold">No. Hp : </span> 082304696706</li>
                            <li><span class="fw-bold">Alamat : </span> JL. AH Nasution No.7</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
