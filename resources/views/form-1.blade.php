@extends('layouts.base')

@section('title','Input Data Mahasiswa')

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
        <div class="col-lg-8 mb-5">
            <form method="POST" action="{{url('/form-1')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group text-center">
                    <img id="profile" src="{{asset('images/social.png')}}" class="profile-image-input mt-3"/><br>
                    <label class="custom-file-upload">
                        <input id="inputProfile" type="file" accept="image/*" name="pas_foto" required>
                        <i class="fa fa-plus mr-2"></i> Tambah gambar
                    </label>
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="nama" class="form-control" id="nama" name="nama_lengkap" placeholder="Nama Lengkap" required>
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                    <label for="nim">NIM</label>
                    <input type="text" class="form-control" id="nim" name="nim"  placeholder="NIM" required>
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                    <label for="fakultas">Fakultas</label>
                    <select class="form-control" name="fakultas" id="fakultas" required>
                        <option value=""> Pilih salah satu </option>
                        @foreach ($Fakultases as $Fakultas)
                        <option value="{{$Fakultas->id}}">{{$Fakultas->nama_fakultas}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="departemen">Departemen</label>
                    <select class="form-control" name="departemen" id="departemen" required>
                        <option value=""> Pilih salah satu </option>
                        @foreach ($Departemens as $Departemen)
                        <option value="{{$Departemen->id}}">{{$Departemen->nama_departemen}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="tahunmasuk">Tahun Masuk</label>
                    <input type="number" class="form-control" id="tahunmasuk" name="tahun_masuk"  placeholder="Tahun Masuk" required>
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                    <label for="ipk">IPK</label>
                    <input type="number" class="form-control" id="ipk" name="ipk" placeholder="SPP Per Semester" required>
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                    <label for="transkrip">Transkrip IPK Terakhir</label>
                    <input type="file" class="form-control-file" name="transkrip" id="transkrip" required>
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                    <label for="spp">SPP Per Semester</label>
                    <input type="number" class="form-control" id="spp" name="spp"  placeholder="SPP Per Semester" required>
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