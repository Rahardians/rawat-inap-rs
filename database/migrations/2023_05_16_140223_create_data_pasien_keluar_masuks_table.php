<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_pasien_keluar_masuks', function (Blueprint $table) {
            $table->id();
            $table->string('no_rm');
            $table->date('tgl_masuk');
            $table->date('tgl_keluar')->nullable();
            $table->string('status_pasien');
            $table->string('jenis_pembayaran');
            $table->string('ruangan');
            $table->string('kelas');
            $table->string('jenis_pelayanan');
            $table->string('lama_rawat')->nullable();
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
        Schema::dropIfExists('data_pasien_keluar_masuks');
    }
};
