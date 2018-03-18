<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    protected $fillable = ['nama','alamat','notelp'];
    protected $visible = ['nama','alamat','notelp'];
    public  $timestamps = true;
}
