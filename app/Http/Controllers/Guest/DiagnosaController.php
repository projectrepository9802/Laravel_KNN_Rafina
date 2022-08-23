<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\DataBasisPengetahuan;
use App\Models\DataGejala;
use App\Models\DataPenyakit;
use App\Models\DataRiwayatKasus;
use App\Models\DataRiwayatPasien;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DiagnosaController extends Controller
{
    public function index()
    {
        $datas = [
            'titlePage' => 'Diagnosa',
            'navLink' => 'diagnosa',
            'dataGejala' => DataGejala::all()
        ];

        return view('Guest.Pages.diagnosa', $datas);
    }

    public function prosesData(Request $request)
    {
        $validReq = $request->validate(
            [
                'nama_pasien' => 'required',
                'GejalaUser' => 'required|min:2'
            ],
            [
                'nama_pasien.required' => 'Field Nama Pasien Wajib Diisi',
                'GejalaUser.required' => 'Field Gejala User Wajib Diisi',
                'GejalaUser.min' => 'Gejala User min.2 Gejala'
            ]
        );

        foreach ($validReq['GejalaUser'] as $key => $value) {
            $dataGejalaFormUser[$value] = "Ada";
        }

        /*
        Langkah 1 : Menentukan Nilai Bobot Kondisi
        Langkah 2 : Mencari Nilai Kondisi Dengan Menghubungkan Kasus yang lama dengan Kasus yang baru
        */
        $DataRiwayatKasus = DataRiwayatKasus::all();
        $NilaiKondisi = [];
        foreach ($DataRiwayatKasus as $key => $value) {
            $NilaiKondisi[$value->kode_kasus] = [];
            $ArrayGejala[$value->kode_kasus] = json_decode($value->array_gejala);
            foreach ($ArrayGejala[$value->kode_kasus] as $k => $v) {
                $NilaiKondisi[$value->kode_kasus][$v] = 0;
                if (isset($dataGejalaFormUser[$v])) {
                    $NilaiKondisi[$value->kode_kasus][$v] = 1;
                } else {
                    $NilaiKondisi[$value->kode_kasus][$v] = 0;
                }
            }
        }

        /*
        Langkah 3 : Menghitung nilai kedekatan kasus baru dengan kasus-kasus sebelumnya
        */
        $jumlahNilaiBobot = [];
        foreach ($NilaiKondisi as $key => $value) {
            $hasilDiagnosaLama[$key] = DataRiwayatKasus::where('kode_kasus', $key)->first()->hasil_diagnosa;
            $idPenyakitLama[$key] = DataPenyakit::where('nama_penyakit', $hasilDiagnosaLama[$key])->first()->id_penyakit;
            $jumlahNilaiBobot[$key] = 0;
            $nilaiKedekatan[$key] = 0;
            foreach ($value as $k => $v) {
                $id_gejala[$k] = DataGejala::where('kode_gejala', $k)->first()->id_gejala;
                $nilai_bobot[$k] = DataBasisPengetahuan::where([
                    'id_penyakit' => $idPenyakitLama[$key],
                    'id_gejala' => $id_gejala[$k]
                ])->first()->nilai_bobot;
                $jumlahNilaiBobot[$key] += $nilai_bobot[$k];
                $nilaiKedekatan[$key] += $v * $nilai_bobot[$k];
            }
            $totalNilaiKedekatan[$key] = round($nilaiKedekatan[$key] / $jumlahNilaiBobot[$key], 2);
        }

        $nilaiMax = max($totalNilaiKedekatan);
        $kodeKasusSearch = array_search($nilaiMax, $totalNilaiKedekatan);

        $namaPenyakitBaru = DataRiwayatKasus::where('kode_kasus', $kodeKasusSearch)->first()->hasil_diagnosa;

        $hasilDiagnosa['kode_pasien'] = "DP" . date('YmdHis');
        $hasilDiagnosa['nama_pasien'] = $validReq['nama_pasien'];
        $hasilDiagnosa['hasil_diagnosa'] = $namaPenyakitBaru;
        foreach ($validReq['GejalaUser'] as $key => $value) {
            $hasilDiagnosa['gejala_pasien'][$key]['kode_gejala'] = $value;
            $hasilDiagnosa['gejala_pasien'][$key]['nama_gejala'] = DataGejala::where('kode_gejala', $value)->first()->nama_gejala;
        }

        $hasilDiagnosa['gejala_pasien'] = json_encode($hasilDiagnosa['gejala_pasien']);

        $newDataRiwayatPasien = new DataRiwayatPasien();
        $newDataRiwayatPasien->tanggal_jam_diagnosa = Carbon::now();
        $newDataRiwayatPasien->kode_pasien = $hasilDiagnosa['kode_pasien'];
        $newDataRiwayatPasien->nama_pasien = $hasilDiagnosa['nama_pasien'];
        $newDataRiwayatPasien->gejala_pasien = $hasilDiagnosa['gejala_pasien'];
        $newDataRiwayatPasien->hasil_diagnosa = $hasilDiagnosa['hasil_diagnosa'];
        $newDataRiwayatPasien->save();

        $idSavedData = $newDataRiwayatPasien->id_pasien;

        return redirect()->to('diagnosa/' . $idSavedData);
    }

    public function showData($id_pasien)
    {
        $dataPasien = DataRiwayatPasien::find($id_pasien);

        $datas = [
            'titlePage' => 'Hasil Diagnosa',
            'navLink' => 'diagnosa',
            'dataPasien' => $dataPasien
        ];

        return view('Guest.Pages.hasildiagnosa', $datas);
    }
}
