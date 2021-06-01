<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSorotanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sorotan', function (Blueprint $table) {
            $table->id('id_artikel');
            $table->string('judul_artikel');
            $table->date('tanggal_up');
            $table->string('konten');
            // $table->unsignedBigInteger('id_dokter');
            $table->foreignId('id_dokter')->constrained('dokter');
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
        Schema::dropIfExists('sorotan');
    }
}
