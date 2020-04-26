<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InfoMahasiswa extends Model
{
    protected $fillable =  ['nim',
                            'nama_lengkap',
                            'pas_foto',
                            'fakultas',
                            'departemen',
                            'tahun_masuk',
                            'ipk',
                            'transkrip',
                            'spp'];
}

