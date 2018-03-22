<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    //
    protected $table ='suppliers';
    protected $fillable = ['*'];
    protected $visible = ['*'];
    public $timestamps = true;


    public function transaksipembelians () 
    {
        return $this->hasMany('App\TransaksiPembelian' , 'id_supplier');
    }


}
