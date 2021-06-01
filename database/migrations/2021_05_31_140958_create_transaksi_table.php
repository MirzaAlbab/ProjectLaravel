<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();
            $table->float('total_biaya');
            $table->date('tanggal_konsultasi');
            // $table->unsignedBigInteger('id_pasien');
            // $table->unsignedBigInteger('id_konsultasi');
            $table->foreignId('id_user')->constrained('users');
            $table->foreignId('id_konsultasi')->constrained('konsultasi');
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
        Schema::dropIfExists('transaksi');
    }
}
