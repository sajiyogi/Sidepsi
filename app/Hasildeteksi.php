<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\user;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Hasildeteksi extends Model
{
    protected $table = 'hasildeteksi';
    protected $fillable = [
         'hasildepresi','tingkatdepresi','user_id' ];

     public function hasildeteksi(){
        return $this->hasMany('App\Hasildeteksi');
    
}

}
