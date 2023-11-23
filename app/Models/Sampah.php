<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sampah extends Model
{
    protected $table = "Sampah";
    //protected $fillable = ['id','nama_bank','alamat_bank','kapasitas'];

    protected $primaryKey = 'id';
}
