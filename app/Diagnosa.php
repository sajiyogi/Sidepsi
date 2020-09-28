<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diagnosa extends Model
{
    
	//
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'diagnosa';
    protected $fillable = [
         'nama_diagnosa','keterangan' ];

     public function kategori(){
        return $this->belongsTo(User::class, 'id');
    }

}
