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
        Schema::create('pasien', function (Blueprint $table) {
            $table->id();
            $table->integer('id_rekamMedis');
            $table->string('nama');
            $table->string('alamat');
            $table->string('nomorTelepon');
            $table->string('email');
            $table->boolean('jenisKelamin');
            $table->string('tempatLahir');
            $table->date('tanggalLahir');
            $table->integer('umur');
            $table->string('pekerjaan');
            $table->integer('kunjungan');
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
        //
    }
};
