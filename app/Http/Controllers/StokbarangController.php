<?php

namespace App\Http\Controllers;

use App\stokbarang;
use Illuminate\Http\Request;

class StokbarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $stokbarang = stokbarang::all();
        return view('stokbarang.index',compact('stokbarang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('stokbarang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $stokbarang = new stokbarang;
        $stokbarang->nama_barang = $request->a;
        $stokbarang->stok = $request->b;
        $stokbarang->harga_beli = $request->c;
        $stokbarang->harga_jual=$request->d;
        if ($request->hasFile('cover')) {
            $books = $request->file('cover');
            $extension = $books->getClientOriginalExtension();
            $filename = str_random(6). '.' .$extension;
            $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'img';
            $books->move($destinationPath, $filename);
            $stokbarang->cover = $filename;
        }
        $stokbarang->save();
        return redirect('stokbarang');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\stokbarang  $stokbarang
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\stokbarang  $stokbarang
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    $stokbarang = Stokbarang::findOrFail($id);
        return view('stokbarang.edit', compact('stokbarang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\stokbarang  $stokbarang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {

        $stokbarang = Stokbarang::findOrFail($id);
        $stokbarang->nama_barang = $request->a;
        $stokbarang->stok = $request->b;
        $stokbarang->harga_beli = $request->c;
        $stokbarang->harga_jual=$request->d;
          if ($request->hasFile('cover')) {
            $books = $request->file('cover');
            $extension = $books->getClientOriginalExtension();
            $filename = str_random(6). '.' .$extension;
            $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'img';
            $books->move($destinationPath, $filename);
            $stokbarang->cover = $filename;
        }
        $stokbarang->save();
        return redirect('stokbarang');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\stokbarang  $stokbarang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $stokbarang = stokbarang::findOrFail($id);
        $stokbarang ->delete();
        return redirect()->route('stokbarang.index');
    }
}
