<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Konsultasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Exception;
use Notification;
use App\User;
use Auth;
use App\Notifikasi;


use App\Notifications\MyFirstNotification;
class KonsultasiPakarController extends Controller
{
     /**
    *
    * allow admin only
    *
    */
public function __construct() {
        $this->middleware('role:pakar');
    }
    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $konsultasis = DB::table('konsultasi')->Join('users', 'konsultasi.user_id', '=', 'users.id')->whereRaw('konsultasi.user_id', 'user.id')->select('konsultasi.id','konsultasi.perihal','konsultasi.deskripsi','konsultasi.solusi','konsultasi.perkembangan','konsultasi.status_konsul','users.nama_lengkap')->get();
        return view('admin.konsultasipakar.index',compact('konsultasis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     //
    //     return view('admin.konsultasi.create');
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
        
    //     $request->validate([
    //         'nama_gejala'  => 'required',
    //         'deskripsi' => 'required',
    //         'nilai_pakar' => 'required',

    //     ]);
    //     Gejala::create($request->all());
    //    return redirect()->route('admin.gejala.index')
    //         ->with('success', 'Karyawan created successfully.'); //Fungsi untuk menyimpan 

    // }

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
        // dd($konsultasi);
 
        return view('konsultasi.edit', compact('konsultasi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // dd($request);
        Notifikasi::create([
            'deskripsi' => 'Pesan Masuk :'.$request->solusi,
            'status_konsul' => 0,
           
            'user_id' => $request->user,
            
            
        ]);

        $id = $request->id_konsul;
        // dd($id);
        $konsultasi = Konsultasi::where('id', $id)->first();
        // $konsultasi = Konsultasi::find($id);

        $konsultasi->solusi = $request->solusi;
        $konsultasi->perkembangan = $request->perkembangan;
        $konsultasi->status_konsul =$request->status_konsul;
        $konsultasi->save();
        $request->validate([
            
             'solusi' => 'required',
            'perkembangan' => 'required', //nama form "publisher" harus diisi (required)
        	'status_konsul' => 'required',

        ]);
//      $details = [

//             'greeting' => 'Hi Artisan',

//             'body' => 'This is my first notification from ItSolutionStuff.com',

//             'thanks' => 'Thank you for using ItSolutionStuff.com tuto!',

//             'actionText' => 'View My Site',

//             'actionURL' => url('/'),

//             'order_id' => 101

//         ];
// $user->notify(new MyFirstNotification($details));




// dd($user->notifications);


        return redirect()->route('admin.konsultasi.index')->with('success', 'konsultasi berhasil dijawab');
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

        return redirect()->route('admin.konsultasi.index')
            ->with('success', 'riwayat konsultasi berhasil dihapus');

    }
}
