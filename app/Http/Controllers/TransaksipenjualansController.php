<?php

namespace App\Http\Controllers;

use App\transaksipenjualans;
use Illuminate\Http\Request;

class TransaksipenjualansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $transaksipenjualan = transaksipenjualans::all();
        return view('transaksipenjualan.index',compact('transaksipenjualan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
          $transaksipenjualan = transaksipenjualans::all();
        return view('transaksipenjualan.create',compact('transaksipenjualan'));
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
        $transaksipenjualan = new transaksipenjualans;
        $transaksipenjualan->tanggal_jual = $request->a;
        $transaksipenjualan->nama_customer = $request->b;
        $transaksipenjualan->alamat = $request->c;
        $transaksipenjualan->save();
        return redirect('transaksipenjualan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\transaksipenjualans  $transaksipenjualans
     * @return \Illuminate\Http\Response
     */
    public function show(transaksipenjualans $transaksipenjualans)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\transaksipenjualans  $transaksipenjualans
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
         $transaksipenjualan = transaksipenjualans::findOrFail($id);
        return view('transaksipenjualan.edit',compact('transaksipenjualan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\transaksipenjualans  $transaksipenjualans
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $transaksipenjualan = transaksipenjualans::findOrFail($id);
        $transaksipenjualan->tanggal_jual = $request->a;
        $transaksipenjualan->nama_customer = $request->b;
        $transaksipenjualan->alamat = $request->c;
        $transaksipenjualan->save();
        return redirect('transaksipenjualan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\transaksipenjualans  $transaksipenjualans
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $transaksipenjualan = transaksipenjualans::findOrFail($id);
        $transaksipenjualan ->delete();
        return redirect()->route('transaksipenjualan.index');
    }
}
