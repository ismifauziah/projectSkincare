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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_produk');
            $table->integer('total');
            $table->string('nama_pengguna');
            $table->decimal('price',8,2);
            $table->text('alamat');
            $table->text('note')->nullable();
            $table->foreign('id_user')->references('id')->on('users')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreign('id')->references('id')->on('produks')->cascadeOnUpdate()->cascadeOnDelete();
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
        Schema::dropIfExists('transaksis');
    }
};
