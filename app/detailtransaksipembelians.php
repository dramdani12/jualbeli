<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detailtransaksipembelians extends Model
{
    //
     protected $table ='detailtransaksipembelians';
    protected $fillable = ['*'];
    protected $visible = ['*'];
    public $timestamps = true;

    public function stokbarangs () 
    {
        return $this->belongsTo('App\Stokbarang', 'id_stokbarang');

    }
	public function transaksipembelians () 
    {
        return $this->belongsTo('App\Transaksipembelians', 'id_transaksipembelian');

    }
    public function suppliers () 
    {
        return $this->belongsTo('App\Supplier', 'id_supplier');

    }

}
