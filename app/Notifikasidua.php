<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notifikasidua extends Model
{
    protected $table = 'Notifikasidua';
    protected $fillable = [
      'deskripsi','status_konsul', 'user_id'
    ];

}
