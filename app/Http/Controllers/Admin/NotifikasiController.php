<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Notifikasi;
class NotifikasiController extends Controller
{
	public function notifikasi(){
            $notifikasi['notifikasi'] = Notifikasi::where('user_id', auth()->id())->where('status_konsul',0)->get();
            $notifikasi['total'] =   Notifikasi::where('user_id', auth()->id())->where('status_konsul',0)->count();
            // dd($notifikasi['total']);
            return $notifikasi;
        }
     public function update(){
     	$notifikasi = Notifikasi::where('status_konsul',0)->update(['status_konsul'=>1]);
     return $notifikasi;
     }   
}
