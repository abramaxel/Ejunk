<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengambilan extends Model
{
    protected $table = "jadwal_pengambilan";
    protected $fillable = ['id_pengambilan','tanggal','waktu'];
    protected $primaryKey = 'id_pengambilan';
}

