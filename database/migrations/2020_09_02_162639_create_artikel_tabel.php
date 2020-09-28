<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtikelTabel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('artikel', function (Blueprint $table) {
            $table->increments('id');
            $table->string('judul',100);
            $table->text('deskripsi');
            $table->string('gambar');
            // $table->string('name');
            // $table->string('net_wt')->nullable();
            // $table->string('gross_wt')->nullable();
            // $table->string('stone_wt')->nullable();
            // $table->longtext('other_details')->nullable();
            // $table->text('description');
            // $table->string('item_image')->nullable();
            // $table->string('caret')->nullable();
            // $table->string('item_size');
            // $table->string('purity')->nullable();
            // $table->string('height')->nullable();
            // $table->string('width')->nullable();
            // $table->string('discount')->nullable();
            // $table->double('price');
              $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
             $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users');
    });
     }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
                  Schema::dropIfExists('artikel');

    }
}
