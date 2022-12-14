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
        Schema::create('tabel_data_basis_pengetahuan', function (Blueprint $table) {
            $table->id('id_basis_pengetahuan');
            $table->integer('id_penyakit', false, true);
            $table->integer('id_gejala', false, true);
            $table->double('nilai_bobot', false, true);
            $table->timestamps();
        });

        $dataBasisPengetahuan = [
            [
                'id_gejala' => 1,
                'id_penyakit' => 1,
                'nilai_bobot' => 0.83,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_gejala' => 2,
                'id_penyakit' => 1,
                'nilai_bobot' => 0.83,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_gejala' => 3,
                'id_penyakit' => 1,
                'nilai_bobot' => 0.66,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_gejala' => 4,
                'id_penyakit' => 2,
                'nilai_bobot' => 0.57,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_gejala' => 5,
                'id_penyakit' => 2,
                'nilai_bobot' => 0.28,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_gejala' => 6,
                'id_penyakit' => 2,
                'nilai_bobot' => 0.57,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_gejala' => 7,
                'id_penyakit' => 3,
                'nilai_bobot' => 0.4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_gejala' => 8,
                'id_penyakit' => 3,
                'nilai_bobot' => 0.8,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_gejala' => 9,
                'id_penyakit' => 3,
                'nilai_bobot' => 0.6,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_gejala' => 10,
                'id_penyakit' => 3,
                'nilai_bobot' => 0.4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_gejala' => 11,
                'id_penyakit' => 4,
                'nilai_bobot' => 0.66,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_gejala' => 12,
                'id_penyakit' => 4,
                'nilai_bobot' => 0.83,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_gejala' => 13,
                'id_penyakit' => 5,
                'nilai_bobot' => 0.66,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_gejala' => 14,
                'id_penyakit' => 5,
                'nilai_bobot' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_gejala' => 15,
                'id_penyakit' => 5,
                'nilai_bobot' => 0.33,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ];

        DB::table('tabel_data_basis_pengetahuan')->insert($dataBasisPengetahuan);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tabel_data_basis_pengetahuan');
    }
};
