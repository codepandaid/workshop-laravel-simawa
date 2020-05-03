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
            <form method="POST" action="{{ url('edit-form-2/'.$InfoKeluarga->id) }}" >
                @csrf
                <div class="form-group">
                    <label for="namaayah">Nama Ayah Kandung</label>
                    <input type="text" class="form-control" id="namaayah" value="{{$InfoKeluarga->nama_ayah}}" name="nama_ayah"  placeholder="Nama Ayah Kandung">
                </div>
                <div class="form-group">
                    <label for="namaibu">Nama Ibu Kandung</label>
                    <input type="text" class="form-control" id="namaibu" value="{{$InfoKeluarga->nama_ibu}}" name="nama_ibu"  placeholder="Nama Ibu Kandung">
                </div>
                <div class="form-group">
                    <label for="pekerjaanayah">Pekerjaan Ayah</label>
                    <select class="form-control" id="pekerjaanayah" name="pekerjaan_ayah">
                    <option value="1" {{ $InfoKeluarga->pekerjaan_ayah == 1 ? 'selected' : '' }} >PNS</option>
                        <option value="2" {{ $InfoKeluarga->pekerjaan_ayah == 2 ? 'selected' : '' }} >Dosen</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="pekerjaanibu">Pekerjaan Ibu</label>
                    <select class="form-control" id="pekerjaanibu" name="pekerjaan_ibu">
                        <option value="1" {{ $InfoKeluarga->pekerjaan_ibu == 1 ? 'selected' : '' }} >PNS</option>
                        <option value="2" {{ $InfoKeluarga->pekerjaan_ibu == 2 ? 'selected' : '' }} >Dosen</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="penghasilanayah">Penghasilan Ayah</label>
                    <input type="number" class="form-control" id="penghasilanayah" value="{{$InfoKeluarga->penghasilan_ayah}}" name="penghasilan_ayah" placeholder="Penghasilan Ayah">
                </div>
                <div class="form-group">
                    <label for="penghasilanibu">Penghasilan Ibu</label>
                    <input type="number" class="form-control" id="penghasilanibu" value="{{$InfoKeluarga->penghasilan_ibu}}" name="penghasilan_ibu"  placeholder="Penghasilan Ibu">
                </div>

                <div class="mt-3" style="float:right">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
                
            </form>
        </div>
    </div>
</div>




@endsection