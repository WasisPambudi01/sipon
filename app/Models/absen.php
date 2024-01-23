<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absen extends Model
{
    use HasFactory;

    function santri()
    {
        return $this->belongsTo(Santri::class,'nis');
    }

    function jenis()
    {
        return $this->belongsTo(JenisAbsen::class,'id_act','id_act');
    }
}
