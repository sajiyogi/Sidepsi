<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Konsultasi;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Exception;
use Auth;
use Session;
class KonsultasiController extends Controller
{
     /**
    *
    * allow admin only
    *
    */
public function __construct() {
        $this->middleware('role:userverified');
    }
    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $konsultasis = Konsultasi::where('user_id', auth()->id())->get();


    
        return view('konsultasi.lihat',compact('konsultasis'));
    }
     public function create()
    {
    
        return view('konsultasi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(Request $request)
     {
       
        
        
                 Konsultasi::create([
            'perihal' =>  $request->perihal,
            'deskripsi' => $request->deskripsi,
            'user_id' => Auth::user()->id,
            
        ]);


       return redirect()->route('konsultasi.lihat')
            ->with('success', 'Karyawan created successfully.'); //Fungsi untuk menyimpan 

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id

     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $konsultasi = Konsultasi::findOrFail($id);

 
        return view('konsultasi.balas', compact('konsultasi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function simpanbalasan(Request $request, $id)
    {
        

    $konsultasi = Konsultasi::find($id);
    $konsultasi->solusi = $request->solusi;
    $konsultasi->perkembangan = $request->perkembangan;
    $konsultasi->status_konsul =$request->status_konsul;
    $konsultasi->save();
    $request->validate([
            
             'solusi' => 'required',
            'perkembangan' => 'required', //nama form "publisher" harus diisi (required)
        	'status_konsul' => 'required',

    ]);

        return redirect()->route('konsultasi.index')->with('success', 'konsultasi berhasil dijawab');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Konsultasi $konsultasi)
    {
    	$konsultasi->delete(); //Fungsi untuk menghapus data sesuai dengan ID yang dipilih

        return redirect()->route('konsultasi.index')
            ->with('success', 'riwayat konsultasi berhasil dihapus');

    }
}
