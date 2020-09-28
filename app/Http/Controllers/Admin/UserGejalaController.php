<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Gejala;
use App\Hasildeteksi;
use Auth;

class UserGejalaController extends Controller
{


     public function index()
    {
        

        $gejalas = Gejala::all();
        return view('gejala.index',compact('gejalas'));
    }
    public function verifiedindex()
    {
        

        $gejalas = Gejala::all();
        return view('gejala.verifiedindex',compact('gejalas'));
    }
     public function gejalaverified(Request $request)
    {

        $gejala = Gejala::all();
         $totalgejala = Gejala::all()->count();
        foreach ($gejala as $key) {
        	$data[] = $key->nilai_pakar;
        }
        // $user = array();
        $user = $request->pilihan[0];
        // $news = implode(',', $user);
        
        // dd($data, $user);
        // $cf = [0,0,0,0,0,0,0,0];
        // dd($user);
        $cfCombine =0;
        for ($i = 0; $i < $totalgejala; $i++) {
            $cf[$i] = $data[$i] * $request->pilihan[$i];

            if ($i == 0) {
                $cfCombine = $cfCombine + $cf[$i];
            } else {
                $cfCombine = ($cfCombine + $cf[$i] * (1 - $cfCombine));
            }
        }

        $cfCombine = (round($cfCombine * 10000) *100) / 10000;
        
        
        if ($cfCombine >= 0 && $cfCombine <= 40) {
            $cfCombine;
            $diagnostic = 'TINGKAT DEPRESI RENDAH';

            $data = Hasildeteksi::create([
            'hasildepresi' => $cfCombine,
            'tingkatdepresi' => $diagnostic,
            'user_id' => Auth::user()->id,
        ]);
            return view('gejala.hasildeteksiverified', compact('cfCombine','diagnostic'));

        }  else if ($cfCombine > 41 && $cfCombine <= 79) {
            $cfCombine;
            $diagnostic = 'TINGKAT DEPRESI SEDANG';
            $data = Hasildeteksi::create([
            'hasildepresi' => $cfCombine,
            'tingkatdepresi' => $diagnostic,
            'user_id' => Auth::user()->id,
        ]);
            return view('gejala.hasildeteksiverified', compact('cfCombine','diagnostic'));

        }  else if ($cfCombine > 80 && $cfCombine <= 100) {
			$cfCombine;
            $diagnostic = 'TINGKAT DEPRESI BERAT';
            $data = Hasildeteksi::create([
            'hasildepresi' => $cfCombine,
            'tingkatdepresi' => $diagnostic,
            'user_id' => Auth::user()->id,
        ]);
            return view('gejala.hasildeteksiverified', compact('cfCombine','diagnostic'));

        
         
}


         return redirect()->back()->withSuccess( 'Maaf Terjadi Kesalahan Pada Hasil  Tingkat Presentase' );  
    }
     public function gejala(Request $request)
    {

        $gejala = Gejala::all();
         $totalgejala = Gejala::all()->count();
        foreach ($gejala as $key) {
            $data[] = $key->nilai_pakar;
        }
        // $user = array();
        $user = $request->pilihan[0];
        // $news = implode(',', $user);
        
        // dd($data, $user);
        // $cf = [0,0,0,0,0,0,0,0];
        // dd($user);
        $cfCombine =0;
        for ($i = 0; $i < $totalgejala; $i++) {
            $cf[$i] = $data[$i] * $request->pilihan[$i];

            if ($i == 0) {
                $cfCombine = $cfCombine + $cf[$i];
            } else {
                $cfCombine = ($cfCombine + $cf[$i] * (1 - $cfCombine));
            }
        }

        $cfCombine = (round($cfCombine * 10000) *100) / 10000;

        if ($cfCombine >= 0 && $cfCombine <= 40) {
            $cfCombine;
            $diagnostic = 'TINGKAT DEPRESI RENDAH';
            return view('gejala.hasildeteksi', compact('cfCombine','diagnostic'));

        } else if ($cfCombine > 41 && $cfCombine <= 79) {
            $cfCombine;
            $diagnostic = 'TINGKAT DEPRESI SEDANG';
            return view('gejala.hasildeteksi', compact('cfCombine','diagnostic'));

        } else if ($cfCombine > 79 && $cfCombine <= 100) {
            $cfCombine;
            $diagnostic = 'TINGKAT DEPRESI TINGGI';
        return view('gejala.hasildeteksi', compact('cfCombine','diagnostic'));
        }
         return redirect()->back()->withSuccess( 'Maaf Terjadi Kesalahan Pada Hasil  Tingkat Presentase' );  


    }

    // public function lihathasil(){

    // 	$lihathasil = 	Hasildeteksi::All();
    // 	return view('gejala.hasildeteksi',compact('lihathasil'));


    // }

}
