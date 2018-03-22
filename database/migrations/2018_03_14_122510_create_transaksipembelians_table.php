<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaksipembeliansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksipembelians', function (Blueprint $table) {
            $table->increments('id');
            $table->string('namabarang');
            $table->string('tanggal_beli');
            $table->integer('id_supplier')->unsigned();
            $table->foreign('id_supplier')->references('id')->on('suppliers')->onUpdate('cascade')->onDelete('cascade');
             $table->integer('id_stokbarang')->unsigned();
            $table->foreign('id_stokbarang')->references('id')->on('stokbarangs')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksipembelians');
    }
}
