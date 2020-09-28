<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Hasildeteksi;
use DB;
class DatadeteksiController extends Controller
{
    public function index()
    {
        //

        $hasilsemua = Hasildeteksi::all();
        $nama = DB::table('hasildeteksi')->Join('users', 'hasildeteksi.user_id', '=', 'users.id')->whereRaw('hasildeteksi.user_id', 'user.id')->select('hasildeteksi.id','hasildeteksi.hasildepresi','hasildeteksi.tingkatdepresi','users.nama_lengkap')->get();



        return view('gejala.hasilsemuadeteksi',compact('hasilsemua','nama'));

    }
     

}
