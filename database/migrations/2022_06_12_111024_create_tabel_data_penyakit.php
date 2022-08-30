<?php

use Carbon\Carbon;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel_data_penyakit', function (Blueprint $table) {
            $table->id('id_penyakit');
            $table->string('kode_penyakit');
            $table->string('nama_penyakit');
            $table->text('solusi_penyakit');
            $table->timestamps();
        });

        $dataPenyakit = [
            [
                'kode_penyakit' => 'P01',
                'nama_penyakit' => 'Pneumonia',
                'solusi_penyakit' =>
                '- Obat antipiretik dan analgetik, seperti ibuprofen atau paracetamol, untuk meredakan demam dan nyeri;
                    - Obat untuk meredakan batuk;
                    - Obat antibiotik, untuk mengatasi pneumonia yang disebabkan oleh infeksi bakteri;
                    - Obat antivirus, untuk mengatasi pneumonia yang disebabkan oleh infeksi virus;
                    - Obat antijamur, untukmengatasi pneumonia yang disebabkan oleh infeksi jamur;
                    - Pemberian antibiotik atau obat lain melalui suntikan;
                    - Pemberian oksigen tambahan melalui selang atau masker oksigen, untuk mempertahankan kadar oksigen dalam darah;
                    - Pemberian cairan infus, untuk menjaga keseimbangan cairan dan kecukupan nutrisi;
                    - Rehabilitasi paru, untuk memaksimalkan penyerapan oksigen dengan melakukan latihan pernapasan',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P02',
                'nama_penyakit' => 'Tuberkolosis (TB)',
                'solusi_penyakit' =>
                '- Melakukan Isoniazid,
                    - Melakukan Rifampicin;
                    - Melakukan Pyrazinamide;
                    - Melakukan Ethambutol',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P03',
                'nama_penyakit' => 'Asma',
                'solusi_penyakit' =>
                '- Inhealer short acting beta 2 agonist;
                    - Kortikosteroid oral atau infus;
                    - Obat antikolinergik',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P04',
                'nama_penyakit' => 'Penyakit Paru Obstruktif Kronis (PPOK)',
                'solusi_penyakit' => json_encode([
                    '- Terapi oksigen;
                    - Rehabilitasi paru;
                    - Terapi ventilasi non-invasif'
                ]),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ];

        DB::table('tabel_data_penyakit')->insert($dataPenyakit);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tabel_data_penyakit');
    }
};
