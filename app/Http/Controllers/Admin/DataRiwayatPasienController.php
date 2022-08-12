<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DataGejala;
use App\Models\DataRiwayatPasien;
use Illuminate\Http\Request;

class DataRiwayatPasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = [
            'titlePage' => 'Data Riwayat Pasien',
            'dataGejala' => DataGejala::all(),
            'dataRiwayatPasien' => DataRiwayatPasien::all()
        ];

        return view('Admin.Pages.DataRiwayatPasien.index', $datas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DataRiwayatPasien  $dataRiwayatPasien
     * @return \Illuminate\Http\Response
     */
    public function show(DataRiwayatPasien $dataRiwayatPasien)
    {
        $datas = [
            'titlePage' => 'Hasil Diagnosa',
            'dataPasien' => $dataRiwayatPasien
        ];

        return view('Admin.Pages.DataRiwayatPasien.hasil', $datas);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DataRiwayatPasien  $dataRiwayatPasien
     * @return \Illuminate\Http\Response
     */
    public function edit(DataRiwayatPasien $dataRiwayatPasien)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DataRiwayatPasien  $dataRiwayatPasien
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DataRiwayatPasien $dataRiwayatPasien)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DataRiwayatPasien  $dataRiwayatPasien
     * @return \Illuminate\Http\Response
     */
    public function destroy(DataRiwayatPasien $dataRiwayatPasien)
    {
        $dataRiwayatPasien->delete();
        return redirect()->to('data-riwayat-pasien')->with('successMessage', 'Berhasil Menghapus Data Riwayat Pasien');
    }
}
