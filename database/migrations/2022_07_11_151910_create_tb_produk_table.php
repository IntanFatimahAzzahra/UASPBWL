<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_produk', function (Blueprint $table) {
            $table->increments('produk_id'); 
            $table->string('produk_nama', 25); 
            $table->string('produk_harga', 100); 
            $table->string('produk_stok', 100); 
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
        Schema::dropIfExists('tb_produk');
    }
};
