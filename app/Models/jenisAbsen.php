<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisAbsen extends Model
{
    use HasFactory;

    protected $table = "jenis_absens";
    protected $primaryKey = 'id_act';

}
