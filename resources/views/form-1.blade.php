@extends('layouts.base')

@section('title','Data Mahasiswa')
@section('navbar_title','Form Input Mahasiswa')

@section('content')

<div style="text-align:center;">
    <span class="step active">1</span>
    <span class="step">2</span>
    <span class="step">3</span>
    <span class="step">4</span>
    <span class="step">5</span>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8 mt-5 mb-5">
            <h4 class="text-center">
                Data Individu
            </h4>
            <form>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama"  placeholder="Nama Lengkap">
                </div>
                <div class="form-group">
                    <label for="nama">NIM</label>
                    <input type="text" class="form-control" id="nama"  placeholder="NIM">
                </div>
                <div class="form-group">
                    <label for="nama">Fakultas</label>
                    <input type="text" class="form-control" id="nama"  placeholder="Fakultas">
                </div>
                <div class="form-group">
                    <label for="nama">Departemen</label>
                    <input type="text" class="form-control" id="nama"  placeholder="Departemen">
                </div>
                <div class="form-group">
                    <label for="nama">Tahun Masuk</label>
                    <input type="number" class="form-control" id="nama"  placeholder="Tahun Masuk">
                </div>
                <div class="form-group">
                    <label for="nama">Departemen</label>
                    <input type="text" class="form-control" id="nama"  placeholder="Departemen">
                </div>
                <div class="form-group">
                    <label for="transkrip">Transkrip IPK Terakhir</label>
                    <input type="file" class="form-control-file" id="transkrip">
                </div>
                <div class="form-group">
                    <label for="spp">SPP Per Semester</label>
                    <input type="number" class="form-control" id="spp"  placeholder="SPP Per Semester">
                </div>
                
                <div class="mt-3" style="float:right">
                    <button type="submit" class="btn btn-primary">Selanjutnya</button>
                </div>
            </form>
        </div>
    </div>
</div>




@endsection