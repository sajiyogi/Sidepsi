<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gejala extends Model
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'gejala';
    protected $fillable = [
         'nama_gejala','deskripsi','nilai_pakar' ];

     public function kategori(){
        return $this->belongsTo(Kategori::class, 'id');
    }
}
