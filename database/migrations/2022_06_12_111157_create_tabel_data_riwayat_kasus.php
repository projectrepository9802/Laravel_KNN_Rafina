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
                'kode_kasus' => 'D11',
                'array_gejala' => json_encode([
                    'G02',
                    'G03'
                ]),
                'hasil_diagnosa' => 'Masokisme',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_kasus' => 'D29',
                'array_gejala' => json_encode([
                    'G04',
                    'G06'
                ]),
                'hasil_diagnosa' => 'Fetishisme',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_kasus' => 'D03',
                'array_gejala' => json_encode([
                    'G07',
                    'G09',
                    'G10'
                ]),
                'hasil_diagnosa' => 'Homoseksual',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_kasus' => 'D01',
                'array_gejala' => json_encode([
                    'G01',
                    'G04'
                ]),
                'hasil_diagnosa' => 'Fetishisme',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_kasus' => 'D09',
                'array_gejala' => json_encode([
                    'G12',
                    'G01'
                ]),
                'hasil_diagnosa' => 'Pedofilia',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_kasus' => 'D04',
                'array_gejala' => json_encode([
                    'G13',
                    'G14'
                ]),
                'hasil_diagnosa' => 'Transvetitisme',
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
