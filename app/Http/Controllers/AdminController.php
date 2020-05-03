<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InfoMahasiswa;
use App\InfoKeluarga;

class AdminController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function editInfoMahasiswa($id){
        $InfoMahasiswa = InfoMahasiswa::findOrFail($id);
        return view('edit-form-1', compact('InfoMahasiswa'));
    }

    public function editInfoKeluarga($id){
        $InfoKeluarga = InfoKeluarga::findOrFail($id);
        return view('edit-form-2', compact('InfoKeluarga'));
    }

}
