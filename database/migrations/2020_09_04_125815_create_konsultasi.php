<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKonsultasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
    {
         Schema::create('konsultasi', function (Blueprint $table) {
            $table->increments('id');
            $table->string('perihal',30)->nullable();
            $table->string('deskripsi')->nullable();
            $table->string('solusi')->nullable();
            $table->string('perkembangan')->nullable();
            $table->enum('status_konsul',['Belum Dibalas', 'Sudah Dibalas']);
            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('konsultasi');

    }
}
