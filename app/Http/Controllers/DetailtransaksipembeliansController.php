<?php

namespace App\Http\Controllers;

use App\detailtransaksipembelians;
use Illuminate\Http\Request;

class DetailtransaksipembeliansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $detailtransaksipembelian = DB::table('detailtransaksipembelians')
                    ->join('stokbarangs','detailtransaksipembelians.id_stokbarang','=','stokbarangs.id')
                    ->join('transaksipembelians','detailtransaksipembelians.id_transaksipembelian','=','transaksipembelians.id')
                    ->join('suppliers','transaksipembelians.id_supplier','=','suppliers.id')
                    ->select('detailtransaksipembelians.*','stokbarangs.nama_barang','transaksipembelians.tanggal_beli','suppliers.namasupplier')->get();
        return view('detailtransaksipembelian.index',compact('detailtransaksipembelian'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\detailtransaksipembelians  $detailtransaksipembelians
     * @return \Illuminate\Http\Response
     */
    public function show(detailtransaksipembelians $detailtransaksipembelians)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\detailtransaksipembelians  $detailtransaksipembelians
     * @return \Illuminate\Http\Response
     */
    public function edit(detailtransaksipembelians $detailtransaksipembelians)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\detailtransaksipembelians  $detailtransaksipembelians
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, detailtransaksipembelians $detailtransaksipembelians)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\detailtransaksipembelians  $detailtransaksipembelians
     * @return \Illuminate\Http\Response
     */
    public function destroy(detailtransaksipembelians $detailtransaksipembelians)
    {
        //
    }
}
