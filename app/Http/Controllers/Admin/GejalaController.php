<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Gejala;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Exception;

class GejalaController extends Controller
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

        $gejalas = Gejala::all();
        return view('admin.gejala.index',compact('gejalas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.gejala.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'nama_gejala'  => 'required',
            'deskripsi' => 'required',
            'nilai_pakar' => 'required',

        ]);
        Gejala::create($request->all());
       return redirect()->route('admin.gejala.index')
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
        $gejala = Gejala::findOrFail($id);

 
        return view('admin.gejala.edit', compact('gejala'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
                $gejala = Gejala::findOrFail($id);

        $request->validate([
            'nama_gejala' => 'required', //nama form "title" harus diisi (required)
            'deskripsi' => 'required',
            'nilai_pakar' => 'required', //nama form "publisher" harus diisi (required)
        ]); //Memvalidasi inputan yang kita kirim apakah sudah benar
        
        $gejala->update($request->all()); //Fungsi untuk mengupdate data inputan kita

        return redirect()->route('admin.gejala.index')->with('success', 'gejala updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gejala $gejala)
    {
    $gejala->delete(); //Fungsi untuk menghapus data sesuai dengan ID yang dipilih

        return redirect()->route('admin.gejala.index')
            ->with('success', 'gejala deleted successfully');

    }
}
