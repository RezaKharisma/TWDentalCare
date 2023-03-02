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
        Schema::create('dokter', function (Blueprint $table) {
            $table->id();
            $table->integer('id_user');
            $table->string('nama');
            $table->string('email')->unique();
            $table->boolean('jenisKelamin');
            $table->string('tempatLahir');
            $table->date('tanggalLahir');
            $table->integer('umur');
            $table->string('agama');
            $table->string('nomorTelepon');
            $table->string('alamat');
            $table->string('pendidikan');
            $table->string('foto');
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
