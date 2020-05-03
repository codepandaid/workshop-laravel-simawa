@extends('layouts.base')

@section('content')

<div class="stepper" style="text-align:center;">
    <span class="step active">1</span>
    <span class="step">2</span>
</div>

<div class="container">
       <div class="header">
            <h4>Informasi Utama</h4>
            <hr>
        </div>
    <div class="row justify-content-center">
        <div class="col-lg-8 mt-5 mb-5">
            <form>
                <div class="form-group text-center">
                    <img id="profile" src="{{asset('images/social.png')}}" class="profile-image-input mt-3"/><br>
                    <label class="custom-file-upload">
                        <input id="inputProfile" type="file" accept="image/*">
                        <i class="fas fa-plus mr-2"></i> Tambah gambar
                    </label>
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="nama" class="form-control" id="nama"  placeholder="Nama Lengkap">
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                    <label for="nim">NIM</label>
                    <input type="text" class="form-control" id="nim"  placeholder="NIM">
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                    <label for="fakultas">Fakultas</label>
                    <input type="text" class="form-control" id="fakultas"  placeholder="Fakultas">
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                    <label for="departemen">Departemen</label>
                    <input type="text" class="form-control" id="departemen"  placeholder="Departemen">
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                    <label for="tahunmasuk">Tahun Masuk</label>
                    <input type="number" class="form-control" id="tahunmasuk"  placeholder="Tahun Masuk">
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                    <label for="transkrip">Transkrip IPK Terakhir</label>
                    <input type="file" class="form-control-file" id="transkrip">
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                    <label for="spp">SPP Per Semester</label>
                    <input type="number" class="form-control" id="spp"  placeholder="SPP Per Semester">
                    <div class="help-block with-errors"></div>
                </div>
                
                <div class="mt-3" style="float:right">
                    <button type="submit" class="btn btn-primary">Selanjutnya</button>
                </div>
            </form>
        </div>
    </div>
</div>




@endsection