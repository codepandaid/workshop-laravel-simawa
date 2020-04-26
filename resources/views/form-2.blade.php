@extends('layouts.base')

@section('title','Data Mahasiswa')
@section('navbar_title','Form Input Mahasiswa')

@section('content')

<div style="text-align:center;">
    <span class="step finish">1</span>
    <span class="step active">2</span>
    <span class="step">3</span>
    <span class="step">4</span>
    <span class="step">5</span>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8 mt-5 mb-5">
            <h4 class="text-center">
                Informasi Keluarga
            </h4>
            <form>
                <div class="form-group">
                    <label for="namaayah">Nama Ayah Kandung</label>
                    <input type="text" class="form-control" id="namaayah"  placeholder="Nama Ayah Kandung">
                </div>
                <div class="form-group">
                    <label for="namaibu">Nama Ibu Kandung</label>
                    <input type="text" class="form-control" id="namaibu"  placeholder="Nama Ibu Kandung">
                </div>
                <div class="form-group">
                    <label for="pekerjaanayah">Pekerjaan Ayah</label>
                    <input type="text" class="form-control" id="pekerjaanayah"  placeholder="Pekerjaan Ayah">
                </div>
                <div class="form-group">
                    <label for="pekerjaanibu">Pekerjaan Ibu</label>
                    <input type="text" class="form-control" id="pekerjaanibu"  placeholder="Pekerjaan Ibu">
                </div>
                <div class="form-group">
                    <label for="penghasilanayah">Penghasilan Ayah</label>
                    <input type="number" class="form-control" id="penghasilanayah"  placeholder="Penghasilan Ayah">
                </div>
                <div class="form-group">
                    <label for="penghasilanibu">Penghasilan Ibu</label>
                    <input type="number" class="form-control" id="penghasilanibu"  placeholder="Penghasilan Ibu">
                </div>

                <div class="mt-3" style="float:right">
                    <button type="submit" class="btn btn-secondary">Sebelumnya</button>
                    <button type="submit" class="btn btn-primary">Selanjutnya</button>
                </div>
            </form>
        </div>
    </div>
</div>




@endsection