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
        Schema::create('tabel_data_riwayat_kasus', function (Blueprint $table) {
            $table->id('id_kasus');
            $table->string('kode_kasus');
            $table->longText('array_gejala');
            $table->string('hasil_diagnosa');
            $table->timestamps();
        });

        $dataRiwayatKasus = [
            [
                'kode_kasus' => 'D01',
                'array_gejala' => json_encode([
                    'G01',
                    'G02',
                    'G07',
                    'G08'
                ]),
                'hasil_diagnosa' => 'Pneumonia',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_kasus' => 'D02',
                'array_gejala' => json_encode([
                    'G01',
                    'G03',
                    'G06',
                    'G10',
                    'G11',
                    'G15',
                    'G16',
                    'G17',
                    'G18',
                    'G19'
                ]),
                'hasil_diagnosa' => 'Tuberkolosis (TB)',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_kasus' => 'D03',
                'array_gejala' => json_encode([
                    'G16',
                    'G20',
                    'G21',
                    'G22'
                ]),
                'hasil_diagnosa' => 'Asma',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_kasus' => 'D04',
                'array_gejala' => json_encode([
                    'G03',
                    'G15',
                    'G16',
                    'G22'
                ]),
                'hasil_diagnosa' => 'Penyakit Paru Obstruktif Kronis (PPOK)',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ];

        DB::table('tabel_data_riwayat_kasus')->insert($dataRiwayatKasus);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tabel_riwayat_kasus');
    }
};
