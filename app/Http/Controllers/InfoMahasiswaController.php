<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;
use App\InfoMahasiswa;

class InfoMahasiswaController extends Controller
{
    public function addInfoMahasiswa(Request $request){
    	$this->validate($request,[
            'nim'           => 'required',
            'nama_lengkap'  => 'required',
            'pas_foto'      => 'required|mimes:jpeg,png,jpg,gif,svg|max:2000',
            'fakultas'      => 'required',
            'departemen'    => 'required',
            'tahun_masuk'   => 'required',
            'ipk'           => 'required',
            'transkrip'     => 'required|mimes:pdf|max:2000',
            'spp'           => 'required'
        ]);
        $InfoMahasiswa                  = new InfoMahasiswa;
        $InfoMahasiswa->nama_lengkap    = $request->input('nama_lengkap');
        $InfoMahasiswa->fakultas        = $request->input('fakultas');
        $InfoMahasiswa->departemen      = $request->input('departemen');
        $InfoMahasiswa->tahun_masuk     = $request->input('tahun_masuk');
        $InfoMahasiswa->ipk             = $request->input('ipk');
        $InfoMahasiswa->spp             = $request->input('spp');

        if($request->hasFile('pas_foto')){
            $name = Storage::disk('local')->put('images/pas_foto', $request->pas_foto);
            $InfoMahasiswa->pas_foto = $name;
        }
        if($request->hasFile('transkrip')){
            $name = Storage::disk('local')->put('images/transkrip', $request->transkrip);
            $InfoMahasiswa->transkrip = $name;
        }
        $InfoMahasiswa->save();
        return $InfoMahasiswa;
    }

    public function viewInfoMahasiswa($id){
        $InfoMahasiswa = InfoMahasiswa::findOrFail($id);
        return $InfoMahasiswa;
    }

    public function editInfoMahasiswa(Request $request, $id){
    	$this->validate($request,[
            'nim'           => 'required',
            'nama_lengkap'  => 'required',
            'fakultas'      => 'required',
            'departemen'    => 'required',
            'tahun_masuk'   => 'required',
            'ipk'           => 'required',
            'spp'           => 'required'
        ]);
        $InfoMahasiswa                  = InfoMahasiswa::findOrFail($id);
        $InfoMahasiswa->nama_lengkap    = $request->input('nama_lengkap');
        $InfoMahasiswa->fakultas        = $request->input('fakultas');
        $InfoMahasiswa->departemen      = $request->input('departemen');
        $InfoMahasiswa->tahun_masuk     = $request->input('tahun_masuk');
        $InfoMahasiswa->ipk             = $request->input('ipk');
        $InfoMahasiswa->spp             = $request->input('spp');
        
        if($request->hasFile('pas_foto')){
            $name = Storage::disk('local')->put('images/pas_foto', $request->pas_foto);
            $InfoMahasiswa->pas_foto = $name;
        }
        else{
            $InfoMahasiswa->pas_foto = $InfoMahasiswa->pas_foto;
        }
        if($request->hasFile('transkrip')){
            $name = Storage::disk('local')->put('images/transkrip', $request->transkrip);
            $InfoMahasiswa->transkrip = $name;
        }
        else{
            $InfoMahasiswa->transkrip = $InfoMahasiswa->transkrip;
        }
        $InfoMahasiswa->save();
        return redirect('/dashboard');
    }

    public function deleteInfoMahasiswa($id){
        $InfoMahasiswa = InfoMahasiswa::findOrFail($id);
        $InfoMahasiswa->delete();
        return redirect('/home');
    }

    //nampilin halaman input form
    //public function createForm(){ 
      //  return view('form-1');
    //}
}
