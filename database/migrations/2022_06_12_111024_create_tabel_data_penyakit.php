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
                'nama_penyakit' => 'Masokisme',
                'solusi_penyakit' => 'Menjalani konsultasi dan psikoterapi',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P02',
                'nama_penyakit' => 'Fetishisme',
                'solusi_penyakit' => 'Menjalani konsultasi dan psikoterapi',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P03',
                'nama_penyakit' => 'Homoseksual',
                'solusi_penyakit' => 'Menjalani konsultasi dan psikoterapi',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P04',
                'nama_penyakit' => 'Pedofilia',
                'solusi_penyakit' => 'Menjalani konsultasi dan psikoterapi',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P05',
                'nama_penyakit' => 'Transvetitisme',
                'solusi_penyakit' => 'Menjalani konsultasi dan psikoterapi',
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
