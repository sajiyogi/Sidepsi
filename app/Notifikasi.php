<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notifikasi extends Model
{
    protected $table = 'notifikasi';
    protected $fillable = [
         'perihal', 'deskripsi', 'solusi','status_konsul', 'user_id'
    ];
}
