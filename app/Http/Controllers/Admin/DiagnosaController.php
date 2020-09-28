<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Diagnosa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Exception;

class DiagnosaController extends Controller
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

        $diagnosas = Diagnosa::all();
        return view('admin.diagnosa.index',compact('diagnosas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.diagnosa.create');
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
            'nama_diagnosa'  => 'required',
            'keterangan' => 'required',
        ]);
        diagnosa::create($request->all());
       return redirect()->route('admin.diagnosa.index')
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
        $diagnosa = Diagnosa::findOrFail($id);

 
        return view('admin.diagnosa.edit', compact('diagnosa'));
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
        $diagnosa = Diagnosa::findOrFail($id);

        $request->validate([
            'nama_diagnosa' => 'required', //nama form "title" harus diisi (required)
            'keterangan' => 'required', //nama form "publisher" harus diisi (required)
        ]); //Memvalidasi inputan yang kita kirim apakah sudah benar
        
        $diagnosa->update($request->all()); //Fungsi untuk mengupdate data inputan kita

        return redirect()->route('admin.diagnosa.index')->with('success', 'diagnosa updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Diagnosa $diagnosa)
    {
    $diagnosa->delete(); //Fungsi untuk menghapus data sesuai dengan ID yang dipilih

        return redirect()->route('admin.diagnosa.index')
            ->with('success', 'diagnosa deleted successfully');

    }
}
