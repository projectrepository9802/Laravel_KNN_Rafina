@extends('Guest.Layouts.main')

@section('content-wrapper')
    <div class="container-fluid" style="height: 100%;">
        <h3 class="text-center pb-5 text-white fw-bold">Informasi Penyakit</h3>
        <div class="accordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                        Apa itu Parvovirus?
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p class="text-custom" style="text-align: justify;">
                            Penyakit parvovirus adalah penyakit yang menular dan bersifat akut serta mematikan yang
                            menginfeksi saluran pencernaan. Penyakit parvovirus disebabkan dari genus parvovirus dari famili
                            parvoviridae .
                        </p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                        Apa itu Distemper?
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p class="text-custom" style="text-align: justify;">
                            Distemper adalah penyakit mematikan yang menyerang saluran pencernaan yang disebabkan oleh virus
                            dalam genus Morbillivirus dari famili Paramyxoviridae dan mempunyai hubungan yang dekat dengan
                            virus measles dan rinderpest.
                        </p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingSix">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                        Apa itu Hepatitis?
                    </button>
                </h2>
                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p class="text-custom" style="text-align: justify;">
                            Hepatitis adalah salah satu penyakit organ pencernaan yaitu radang hati yang sangat menular.
                            Hepatitis disebabkan oleh virus Adenovirus.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
