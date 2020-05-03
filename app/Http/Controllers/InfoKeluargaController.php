<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InfoKeluarga;

class InfoKeluargaController extends Controller
{
    public function addInfoKeluarga(Request $request){
    	$this->validate($request,[
            'mahasiswa_id'      => 'required',
            'nama_ayah'         => 'required',
            'nama_ibu'          => 'required',
            'pekerjaan_ayah'    => 'required',
            'pekerjaan_ibu'     => 'required',
            'penghasilan_ayah'  => 'required',
            'penghasilan_ibu'   => 'required',
        ]);
        $InfoKeluarga                   = new InfoKeluarga;
        $InfoKeluarga->mahasiswa_id     = $request->input('mahasiswa_id');
        $InfoKeluarga->nama_ayah        = $request->input('nama_ayah');
        $InfoKeluarga->nama_ibu         = $request->input('nama_ibu');
        $InfoKeluarga->pekerjaan_ayah   = $request->input('pekerjaan_ayah');
        $InfoKeluarga->pekerjaan_ibu    = $request->input('pekerjaan_ibu');
        $InfoKeluarga->penghasilan_ayah = $request->input('penghasilan_ayah');
        $InfoKeluarga->penghasilan_ibu  = $request->input('penghasilan_ibu');
        $InfoKeluarga->save();

        return $InfoKeluarga;
    }

    public function viewInfoKeluarga($id){
        $InfoKeluarga = InfoKeluarga::findOrFail($id);
        return $InfoKeluarga;
    }

    public function editInfoKeluarga(Request $request, $id){
    	$this->validate($request,[
            'nama_ayah'         => 'required',
            'nama_ibu'          => 'required',
            'pekerjaan_ayah'    => 'required',
            'pekerjaan_ibu'     => 'required',
            'penghasilan_ayah'  => 'required',
            'penghasilan_ibu'   => 'required',
        ]);
        $InfoKeluarga                   = InfoKeluarga::findOrFail($id);
        $InfoKeluarga->nama_ayah        = $request->input('nama_ayah');
        $InfoKeluarga->nama_ibu         = $request->input('nama_ibu');
        $InfoKeluarga->pekerjaan_ayah   = $request->input('pekerjaan_ayah');
        $InfoKeluarga->pekerjaan_ibu    = $request->input('pekerjaan_ibu');
        $InfoKeluarga->penghasilan_ayah = $request->input('penghasilan_ayah');
        $InfoKeluarga->penghasilan_ibu  = $request->input('penghasilan_ibu');
        $InfoKeluarga->save();

        return redirect('/dashboard');
    }

    public function deleteInfoKeluarga($id){
        $InfoKeluarga = InfoKeluarga::findOrFail($id);
        $InfoKeluarga->delete();
        return redirect('/home');
    }
}
