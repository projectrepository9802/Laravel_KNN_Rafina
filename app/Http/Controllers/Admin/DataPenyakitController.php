<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DataPenyakit;
use Illuminate\Http\Request;

class DataPenyakitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = [
            'titlePage' => 'Data Penyakit',
            'dataPenyakit' => DataPenyakit::all()
        ];

        return view('Admin.Pages.DataPenyakit.index', $datas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datas = [
            'titlePage' => 'Data Penyakit'
        ];

        return view('Admin.Pages.DataPenyakit.create', $datas);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validReq = $request->validate(
            [
                'kode_penyakit' => 'required|unique:tabel_data_penyakit,kode_penyakit',
                'nama_penyakit' => 'required',
                'solusi_penyakit' => 'required'
            ],
            [
                'kode_penyakit.required' => 'Field Kode Penyakit Wajib Diisi',
                'kode_penyakit.unique' => 'Kode Penyakit Harus Unik',
                'nama_penyakit.required' => 'Field Nama Penyakit Wajib Diisi',
                'solusi_penyakit.required' => 'Field Solusi Penyakit Wajib Diisi',
            ]
        );

        $newDataPenyakit = new DataPenyakit();
        $newDataPenyakit->kode_penyakit = $validReq['kode_penyakit'];
        $newDataPenyakit->nama_penyakit = $validReq['nama_penyakit'];
        $newDataPenyakit->solusi_penyakit = $validReq['solusi_penyakit'];
        $newDataPenyakit->save();

        return redirect()->to('data-penyakit')->with('successMessage', 'Berhasil Menambahkan Data Penyakit');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DataPenyakit  $dataPenyakit
     * @return \Illuminate\Http\Response
     */
    public function show(DataPenyakit $dataPenyakit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DataPenyakit  $dataPenyakit
     * @return \Illuminate\Http\Response
     */
    public function edit(DataPenyakit $dataPenyakit)
    {
        $datas = [
            'titlePage' => 'Data Penyakit',
            'dataPenyakit' => $dataPenyakit
        ];

        return view('Admin.Pages.DataPenyakit.edit', $datas);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DataPenyakit  $dataPenyakit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DataPenyakit $dataPenyakit)
    {
        $validReq = $request->validate(
            [
                'kode_penyakit' => 'required|unique:tabel_data_penyakit,kode_penyakit,' . $dataPenyakit->id_penyakit . ',id_penyakit',
                'nama_penyakit' => 'required',
                'solusi_penyakit' => 'required'
            ],
            [
                'kode_penyakit.required' => 'Field Kode Penyakit Wajib Diisi',
                'kode_penyakit.unique' => 'Kode Penyakit Harus Unik',
                'nama_penyakit.required' => 'Field Nama Penyakit Wajib Diisi',
                'solusi_penyakit.required' => 'Field Solusi Penyakit Wajib Diisi',
            ]
        );

        $dataPenyakit->kode_penyakit = $validReq['kode_penyakit'];
        $dataPenyakit->nama_penyakit = $validReq['nama_penyakit'];
        $dataPenyakit->solusi_penyakit = $validReq['solusi_penyakit'];
        $dataPenyakit->save();

        return redirect()->to('data-penyakit')->with('successMessage', 'Berhasil Mengubah Data Penyakit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DataPenyakit  $dataPenyakit
     * @return \Illuminate\Http\Response
     */
    public function destroy(DataPenyakit $dataPenyakit)
    {
        $dataPenyakit->delete();
        return redirect()->to('data-penyakit')->with('successMessage', 'Berhasil Menghapus Data Penyakit');
    }
}
