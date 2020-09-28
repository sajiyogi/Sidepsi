<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Gejala;
use App\Konsultasi;
use App\Artikel;
use App\Hasildeteksi;
use DB;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $count = User::count();
        $jumlahuser= $count-2;
        $gejala = Gejala::count();
        $konsultasi = Konsultasi::count();
        $artikels = Artikel::count();
        $hasildeteksi = Hasildeteksi::count();
        
        $hasildeteksiringan = DB::table('hasildeteksi')
                ->where('tingkatdepresi','TINGKAT DEPRESI RENDAH')
                ->count();
        $hasildeteksisedang = DB::table('hasildeteksi')
                ->where('tingkatdepresi', "TINGKAT DEPRESI SEDANG")
                ->count();
        $hasildeteksiberat = DB::table('hasildeteksi')
                ->where('tingkatdepresi', "TINGKAT DEPRESI BERAT")
                ->count();

        $hasildeteksiparah = DB::table('hasildeteksi')
->rightJoin('users', 'hasildeteksi.user_id', '=', 'users.id')->where('hasildeteksi.tingkatdepresi', '=', 'TINGKAT DEPRESI RENDAH')->select('users.nama_lengkap')->get();


        return view('index',compact('jumlahuser','gejala','konsultasi','artikels','hasildeteksi','hasildeteksiringan','hasildeteksiminimal','hasildeteksisedang','hasildeteksiberat'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
        
}
