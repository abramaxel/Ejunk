<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    protected $table = "pengguna";
    protected $fillable = ['idPengguna', 'nama_lengkap', 'alamat', 'connum', 'nomor_telepon', 'alamat_email'];

    protected $primaryKey = 'idPengguna';
}
