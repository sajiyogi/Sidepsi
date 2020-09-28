<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Konsultasi extends Model
{
	    protected $table = 'konsultasi';
    protected $fillable = [
         'perihal', 'deskripsi', 'solusi', 'perkembangan', 'status_konsul', 'user_id'
    ];

     public function konsultasi(){
        return $this->hasMany('App\Konsultasi');
    }
}
