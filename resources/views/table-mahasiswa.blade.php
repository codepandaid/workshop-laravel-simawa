@extends('layouts.base')

@section('content')

<div class="container">
    <div class="header">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" href="#">Bantuan SPP</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Bantuan Uang Saku</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Bantuan Tempat Tinggal</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Beasiswa Lembaga Mitra</a>
            </li>
            </ul>
    </div>

    <div class="header" style="padding: 20px">
            <div class="subtitle" style="float: left">
            <h5 >Data mahasiswa Penerima Bantuan SPP</h5>
            </div>    
            <div class="add" style="float: right">
                <a href="#" class="link"><i class="fas fa-plus"></i> Tambah Data</a></li>
            </div>
        </div>
        <hr style="margin-left: 20px; margin-right:20px">
        
    <div class="filter">

    </div>
    <div class="table-responsive" style="align-content: center " >
            <table class="table table-hover " style="margin-left: 20px; margin-right:20px">
                <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">Fakultas</th>
                    <th scope="col">Departemen</th>
                    <th scope="col">Tahun Masuk</th>
                    <th scope="col">IPK terakhir</th>
                    <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                </tbody>
            
        </div>
    </div>
</div>

@endsection