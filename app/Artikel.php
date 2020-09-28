<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
	//
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'artikel';
    protected $fillable = [
         'judul','deskripsi','gambar' ];

     public function kategori(){
        return $this->belongsTo(Kategori::class, 'id');

}
}
