<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Exception;

class LihatArtikelController extends Controller
{
	 public function index()
    {
        //

        $artikels = Artikel::all();
        return view('artikel',compact('artikels'));
    }
    //
}
