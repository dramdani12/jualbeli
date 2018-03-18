<?php

namespace App\Http\Controllers;
use DB;
use App\supplier;
use App\transaksipembelians;
use Illuminate\Http\Request;

class TransaksipembeliansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $transaksipembelian = DB::table('transaksipembelians')
                    ->join('suppliers','transaksipembelians.id_supplier','=','suppliers.id')
                    ->select('transaksipembelians.*','suppliers.namasupplier')->get();
        return view('transaksipembelian.index',compact('transaksipembelian'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $supplier = supplier::all();
        return view('transaksipembelian.create',compact('supplier'));
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
        $supplier = Supplier::findOrFail($request->b);
        $transaksipembelian = new transaksipembelians;
        $transaksipembelian->id_supplier = $request->b;
        $transaksipembelian->tanggal_beli = $request->c;
        $supplier->save();
        $transaksipembelian->save();
        return redirect('transaksipembelian');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\transaksipembelians  $transaksipembelians
     * @return \Illuminate\Http\Response
     */
    public function show(transaksipembelians $transaksipembelians)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\transaksipembelians  $transaksipembelians
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $transaksipembelian = transaksipembelians::findOrFail($id);
        $supplier = Supplier::all();
        return view('transaksipembelian.edit',compact('transaksipembelian','supplier'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\transaksipembelians  $transaksipembelians
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $supplier= supplier::findOrFail($request->b);
        $transaksipembelian =transaksipembelians::findOrFail($id);
        $transaksipembelian->id_supplier = $request->b;
        $transaksipembelian->tanggal_beli = $request->c;
        $supplier->save();
        $transaksipembelian->save();
        return redirect('transaksipembelian');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\transaksipembelians  $transaksipembelians
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
         $transaksipembelian = transaksipembelians::findOrFail($id);
        $transaksipembelian->delete();
        return redirect('transaksipembelian');
    }
}
