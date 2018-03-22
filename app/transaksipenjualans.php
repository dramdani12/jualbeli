<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaksipenjualans extends Model
{
    //
     protected $table ='transaksipenjualans';
    protected $fillable = ['*'];
    protected $visible = ['*'];
    public $timestamps = true;
}
