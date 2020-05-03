@extends('layouts.base')

@section('title','Data Mahasiswa')
@section('navbar_title','Edit Data Mahasiswa')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8 mt-5 mb-5">
            <h4 class="text-center">
                Data Individu
            </h4>
            <form method="POST" action="{{ url('edit-form-1/'.$InfoMahasiswa->id) }}" enctype="multipart/form-data" >
                @csrf
                <div class="form-group text-center">
                    <img id="profile" src="{{asset($InfoMahasiswa->pas_foto)}}" class="profile-image-input mt-3"/><br>
                    <label class="custom-file-upload">
                        <input id="inputProfile" type="file" accept="image/*">
                        <i class="fas fa-plus mr-2"></i> Tambah gambar
                    </label>
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" value="{{$InfoMahasiswa->nama_lengkap}}" name="nama_lengkap"  placeholder="Nama Lengkap">
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                    <label for="nim">NIM</label>
                    <input type="text" class="form-control" id="nim" value="{{$InfoMahasiswa->nim}}" name="nim"  placeholder="NIM">
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                    <label for="fakultas">Fakultas</label>
                    <select class="form-control" id="fakultas" name="fakultas">
                        <option value="1" {{ $InfoMahasiswa->fakultas == 1 ? 'selected' : '' }} >FMIPA</option>
                        <option value="2" {{ $InfoMahasiswa->fakultas == 2 ? 'selected' : '' }} >FEMA</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="departemen">Departemen</label>
                    <select class="form-control" id="departemen" name="departemen">
                        <option value="1" {{ $InfoMahasiswa->departemen == 1 ? 'selected' : '' }} >Ilkom</option>
                        <option value="2" {{ $InfoMahasiswa->departemen == 2 ? 'selected' : '' }} >STK</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="tahunmasuk">Tahun Masuk</label>
                    <input type="number" class="form-control" id="tahunmasuk" value="{{$InfoMahasiswa->tahun_masuk}}" name="tahun_masuk"  placeholder="Tahun Masuk">
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                    <label for="ipk">IPK</label>
                    <input type="number" class="form-control" id="ipk" value="{{$InfoMahasiswa->ipk}}" name="ipk" placeholder="IPK Terakhir">
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                    <label for="transkrip">Transkrip IPK Terakhir</label>
                    <input type="file" class="form-control-file" id="transkrip" name="transkrip">
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                    <label for="spp">SPP Per Semester</label>
                    <input type="number" class="form-control" id="spp" value="{{$InfoMahasiswa->spp}}" name="spp" placeholder="SPP Per Semester">
                    <div class="help-block with-errors"></div>
                </div>
                
                <div class="mt-3" style="float:right">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection