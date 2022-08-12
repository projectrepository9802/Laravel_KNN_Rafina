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
        Schema::create('tabel_data_gejala', function (Blueprint $table) {
            $table->id('id_gejala');
            $table->string('kode_gejala');
            $table->string('nama_gejala');
            $table->timestamps();
        });

        $dataGejala = [
            [
                'kode_gejala' => 'G01',
                'nama_gejala' => 'Memiliki hasrat seksual yang tinggi',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G02',
                'nama_gejala' => 'Seksual disertai kekerasan fisik',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G03',
                'nama_gejala' => 'Kepuasan seksual dengan disakiti pasangannya',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G04',
                'nama_gejala' => 'Memiliki koleksi benda mati yang membuatnya tertarik dalam berfantasi seksual',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G05',
                'nama_gejala' => 'Fantasi seksual terhadap benda mati',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G06',
                'nama_gejala' => 'Ketertarikan yang berlebihan pada benda mati',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G07',
                'nama_gejala' => 'Memiliki ketertarikan berlebih terhadap sesama jenis',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G08',
                'nama_gejala' => 'Kontak seksual dengan sesama jenis',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G09',
                'nama_gejala' => 'Suka memuji sesama jenis',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G10',
                'nama_gejala' => 'Menjaga jarak dari lawan jenis',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G11',
                'nama_gejala' => 'Memiliki fantasi seksual terhadap anak dibawah umur',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G12',
                'nama_gejala' => 'Melakukan kontak seksual terhadap anak dibawah umur',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G13',
                'nama_gejala' => 'Berkeinginan untuk mengganti jenis kelamin',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G14',
                'nama_gejala' => 'Memiliki dorongan untuk bertingkah laku seperti lawan jenis',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G15',
                'nama_gejala' => 'Memiliki koleksi barang - barang dari lawan jenis',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ];

        DB::table('tabel_data_gejala')->insert($dataGejala);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tabel_data_gejala');
    }
};
