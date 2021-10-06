<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MigrasiDataPegawai extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('data_pegawai', function (Blueprint $table) {
            $table->id();
            $table->string('nip');
            $table->string('nama_pegawai');
            $table->foreign('departemen_id');
            $table->string('email');
            $table->integer('telepon');
            $table->boolean('gender')->pria(0)->wanita(1);
            $table->boolean('status')->Active(0)->Inactive(1);
        });

 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_pegawai');
    }
}
