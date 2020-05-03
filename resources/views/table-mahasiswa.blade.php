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
                <a href="{{url('/form-1')}}" class="link"><i class="fas fa-plus"></i> Tambah Data</a></li>
            </div>
        </div>
        <hr style="margin-left: 20px; margin-right:20px">
        
    <div class="filter">

    </div>
    <div class="table-responsive" style="align-content: center " >
            <table class="table table-hover ">
                <thead class="thead">
                    <tr style="text-align: center">
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
                    <tr style="text-align: center" class="table-row" data-href="#">
                        <th scope="row">1</th>
                        <td>Afifah Noviani</td>
                        <td>FMIPA</td>
                        <td>Ilmu Komputer</td>
                        <td>2017</td>
                        <td>4.00</td>
                        <td>
                            <a href='#' class="btn btn-info" role="button">Edit</a>
                            <a href='#' class="btn btn-danger" role="button">Delete</a>
                        </td>

                    </tr>
                    
                </tbody>
            
        </div>
    </div>
</div>

@endsection