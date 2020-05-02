<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InfoKeluarga extends Model
{
    protected $fillable =  ['nama_ayah',
                            'nama_ibu',
                            'pekerjaan_ayah',
                            'pekerjaan_ibu',
                            'penghasilan_ayah',
                            'penghasilan_ibu'];
}
