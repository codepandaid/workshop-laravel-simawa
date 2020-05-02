@extends('layouts.base')

@section('title','Data Mahasiswa')
@section('navbar_title','Edit Data Mahasiswa')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8 mt-5 mb-5">
            <h4 class="text-center">
                Informasi Keluarga
            </h4>
            <form>
                <div class="form-group">
                    <label for="namaayah">Nama Ayah Kandung</label>
                    <input type="text" class="form-control" id="namaayah" value=""  placeholder="Nama Ayah Kandung">
                </div>
                <div class="form-group">
                    <label for="namaibu">Nama Ibu Kandung</label>
                    <input type="text" class="form-control" id="namaibu" value=""  placeholder="Nama Ibu Kandung">
                </div>
                <div class="form-group">
                    <label for="pekerjaanayah">Pekerjaan Ayah</label>
                    <input type="text" class="form-control" id="pekerjaanayah" value=""  placeholder="Pekerjaan Ayah">
                </div>
                <div class="form-group">
                    <label for="pekerjaanibu">Pekerjaan Ibu</label>
                    <input type="text" class="form-control" id="pekerjaanibu" value="" placeholder="Pekerjaan Ibu">
                </div>
                <div class="form-group">
                    <label for="penghasilanayah">Penghasilan Ayah</label>
                    <input type="number" class="form-control" id="penghasilanayah" value="" placeholder="Penghasilan Ayah">
                </div>
                <div class="form-group">
                    <label for="penghasilanibu">Penghasilan Ibu</label>
                    <input type="number" class="form-control" id="penghasilanibu" value=""  placeholder="Penghasilan Ibu">
                </div>

                <div class="mt-3" style="float:right">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
                
            </form>
        </div>
    </div>
</div>




@endsection