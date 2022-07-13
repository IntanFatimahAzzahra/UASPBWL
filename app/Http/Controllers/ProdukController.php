<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Produk::all(); 
        return view('produk.index', compact('rows')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('produk.create'); 
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
            'produk_nama' => 'bail|required|unique:tb_produk', 
            'produk_harga' => 'required' 
        ], 
        [ 
            'produk_nama.required' => 'Nama Produk wajib diisi', 
            'produk_nama.unique' => 'Nama Produk sudah ada', 
            'produk_harga.required' => 'Harga Produk wajib diisi' 
        ]); 

        Produk::create([ 
        'produk_nama' => $request->produk_nama, 
        'produk_harga' => $request->produk_harga, 
        'produk_stok' => $request->produk_stok 
        ]); 

        return redirect('produk');
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
        $row = Menu::findOrFail($id);
    return view('menu.edit', compact('row'));
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
         $request->validate(
        [ 
            'menu_nama' => 'bail|required', 
            'menu_harga' => 'required' 
        ], 
        [ 
            'menu_nama.required' => 'NIM wajib diisi', 
            'menu_nama.unique' => 'NIM sudah ada', 
            'menu_harga.required' => 'Nama wajib diisi' 
        ]
    ); 
         $row = Menu::findOrFail($id);
         $row->update([
        'menu_nama' => $request->menu_nama, 
        'menu_harga' => $request->menu_harga, 
        'menu_stok' => $request->menu_stok 
    ]);
          return redirect('menu');}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
