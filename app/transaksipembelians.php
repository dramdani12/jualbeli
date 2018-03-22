<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransaksiPembelians extends Model
{
    //
    protected $table ='transaksipembelians';
    protected $fillable = ['*'];
    protected $visible = ['*'];
    public $timestamps = true;

    public function suppliers () 
    {
        return $this->belongsTo('App\Supplier', 'id_supplier');

    }
}

