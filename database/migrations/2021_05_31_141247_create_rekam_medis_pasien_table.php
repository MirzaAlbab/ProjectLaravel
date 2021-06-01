<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRekamMedisPasienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rekam_medis_pasien', function (Blueprint $table) {
            $table->string('hasil_swabtest');
            $table->string('gejala');
            $table->string('tensi_darah');
            $table->integer('suhu_tubuh');
            $table->string('darah_lengkap');
            $table->string('reseptor_rate');
            // $table->unsignedBigInteger('id_pasien');
            $table->foreignId('id_user')->constrained('users');
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
        Schema::dropIfExists('rekam_medis_pasien');
    }
}
