<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTbInvent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Kode tb Invent
        Schema::create('tb_invent', function (Blueprint $table) {
            $table->increments('id_invent');
            $table->string('nama_supplier');
            $table->string('nama_barang');
            $table->integer('harga_barang');
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('tb_invent');
    }
}
