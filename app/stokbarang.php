<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class stokbarang extends Model{

   protected $table ='stokbarangs';
   protected $fillable = ['nama_barang','stok','harga_jual','harga_beli','cover'];
    protected $visible = ['nama_barang','stok','harga_jual','harga_beli','cover'];
    public $timestamps = true;

    public function transaksipembelians () 
    {
        return $this->hasMany('App\TransaksiPembelian' , 'id_stokbarang');
    }
}



