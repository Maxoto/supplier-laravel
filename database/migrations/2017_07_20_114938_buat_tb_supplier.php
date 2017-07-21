<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTbSupplier extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Kode untuk buat tabel tb_supplier
        Schema::create('tb_supplier', function (Blueprint $table) {
            $table->increments('id_supplier');
            $table->string('nama_supplier');
            //
        });

        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Kode untuk 'drop' tabel tb_supplier
        Schema::drop('tb_supplier');
    }
}
