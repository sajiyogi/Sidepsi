<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
         'permanent_address', 'avatar', 'city', 'mobile', 'aadhar_no', 'user_id'
    ];

     public function users(){
        return $this->belongsTo(User::class, 'id');
    }
}
