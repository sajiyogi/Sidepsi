<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Exception;

class ArtikelController extends Controller
{
     /**
    *
    * allow admin only
    *
    */
public function __construct() {
        $this->middleware('role:admin');
    }
    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //

        $artikels = Artikel::all();
        return view('admin.artikel.index',compact('artikels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.artikel.create');
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
            'judul'    =>  'required',
            'deskripsi'     =>  'required',
            'gambar'         =>  'required|image|max:2048'
        ]);

        $image = $request->file('gambar');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);
        $form_data = array(
            'judul'       =>   $request->judul,
            'deskripsi'        =>   $request->deskripsi,
            'gambar'            =>   $new_name
        );

        Artikel::create($form_data);

        return redirect()->route('admin.artikel.index')->with('success', 'Data Added successfully.');
    }
    //     $request->validate([
    //         'judul'  => 'required',
    //         'deskripsi' => 'required',
    //         'gambar'=>'required',
    //     ]);
    //         if ($request->hasFile('gambar')) {
    //         $gambar= $request->file('gambar')->store('public/images');
    //         $artikel = Artikel::create([
    //         'judul' => $request->judul,    
    //         'deskripsi' => $request->deskripsi,
    //         'gambar' => $gambar
    //         ]);
    //     }
    //    return redirect()->route('admin.artikel.index')
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
        $artikel = Artikel::findOrFail($id);

 
        return view('admin.artikel.edit', compact('artikel'));
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
        $image_name = $request->hidden_image;
        $image = $request->file('gambar');
        if($image != '')
        {
            $request->validate([
                'judul'    =>  'required',
                'deskripsi'     =>  'required',
                'gambar'         =>  'image|max:2048'
            ]);

            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $image_name);
        }
        else
        {
            $request->validate([
                'judul'    =>  'required',
                'deskripsi'     =>  'required'
            ]);
        }

        $form_data = array(
            'judul'       =>   $request->judul,
            'deskripsi'        =>   $request->deskripsi,
            'gambar'            =>   $image_name
        );
  
        Artikel::whereId($id)->update($form_data);

        return redirect()->route('admin.artikel.index')->with('success', 'Data is successfully updated');

        // $artikel = Artikel::findOrFail($id);

        // $request->validate([
        //     'judul' => 'required', //nama form "title" harus diisi (required)
        //     'deskripsi' => 'required',
        //     'gambar'=>'required', //nama form "publisher" harus diisi (required)
        // ]); //Memvalidasi inputan yang kita kirim apakah sudah benar
        
        // $artikel->update($request->all()); //Fungsi untuk mengupdate data inputan kita

        // return redirect()->route('admin.artikel.index')->with('success', 'artikel updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(artikel $artikel)
    {
    $artikel->delete(); //Fungsi untuk menghapus data sesuai dengan ID yang dipilih

        return redirect()->route('admin.artikel.index')
            ->with('success', 'artikel deleted successfully');

    }
}
