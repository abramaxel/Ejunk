<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadwalPengambilanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal_pengambilan', function (Blueprint $table) {
            $table->id('id_pengambilan'); // Kolom id_pengambilan sebagai primary key
            $table->date('tanggal'); // Kolom tanggal dengan tipe data DATE
            $table->time('waktu'); // Kolom waktu dengan tipe data TIME
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jadwal_pengambilan');
    }
}
