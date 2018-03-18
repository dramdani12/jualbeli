<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailtransaksipenjualansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detailtransaksipenjualans', function (Blueprint $table) {
            $table->increments('id');
             $table->integer('id_stokbarang')->unsigned();
            $table->foreign('id_stokbarang')->references('id')->on('stokbarangs')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('jumlah');
            $table->integer('id_transaksipenjualan')->unsigned();
            $table->foreign('id_transaksipenjualan')->references('id')->on('transaksipenjualans')->onUpdate('cascade')->onDelete('cascade');
            $table->string('harga_beli');
            $table->string('total');
            $table->string('tunai');
            $table->string('kembali');
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
        Schema::dropIfExists('detailtransaksipenjualans');
    }
}
