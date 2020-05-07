@extends('layouts.base')


@section('content')

<div class="stepper" style="text-align:center;">
    <span class="step finish">1</span>
    <span class="step active">2</span>
</div>

<div class="container">
    <div class="header">
        <h4>Informasi Keluarga</h4>
        <hr>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-8 mb-5">
            <form>
                <div class="form-group">
                    <label for="namaayah">Nama Ayah Kandung</label>
                    <input type="text" class="form-control" id="namaayah" placeholder="Nama Ayah Kandung">
                </div>
                <div class="form-group">
                    <label for="namaibu">Nama Ibu Kandung</label>
                    <input type="text" class="form-control" id="namaibu" placeholder="Nama Ibu Kandung">
                </div>
                <div class="form-group">
                    <label for="pekerjaanayah">Pekerjaan Ayah</label>
                    <select class="form-control" id="pekerjaanayah">
                        <option value="">Pilih salah satu</option>
                        <option value="1">PNS</option>
                        <option value="2">Dosen</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="pekerjaanibu">Pekerjaan Ibu</label>
                    <select class="form-control" id="pekerjaanibu">
                        <option value="">Pilih salah satu</option>
                        <option value="1" >PNS</option>
                        <option value="2" >Dosen</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="penghasilanayah">Penghasilan Ayah</label>
                    <input type="number" class="form-control" id="penghasilanayah" placeholder="Penghasilan Ayah">
                </div>
                <div class="form-group">
                    <label for="penghasilanibu">Penghasilan Ibu</label>
                    <input type="number" class="form-control" id="penghasilanibu" placeholder="Penghasilan Ibu">
                </div>

                <div class="mt-3" style="float:right">
                    <a href="" class="btn btn-secondary">Sebelumnya</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>

            </form>
        </div>
    </div>
</div>

@endsection