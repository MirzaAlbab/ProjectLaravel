<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKonsultasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('konsultasi', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal_konsultasi');
            $table->string('catatan_konsultasi')->nullable();
            // $table->unsignedBigInteger('id_pasien');
            // $table->unsignedBigInteger('id_dokter');
            $table->foreignId('id_dokter')->nullable()->constrained('dokter');
            $table->foreignId('id_user')->nullable()->constrained('users');
            // $table->foreign('id_pasien')->references('id_pasien')->on('users');
            // $table->foreign('id_dokter')->references('id_dokter')->on('dokter');
            
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
        Schema::dropIfExists('konsultasi');
    }
}
