<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTamuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_tamu', function (Blueprint $table) {
            $table->id();
            $table->foreignId('reservasi_id');
            $table->string('nama_pemesan', 50);
            $table->string('email', 30);
            $table->string('no_hp', 20);
            $table->string('nama_tamu', 50);
            $table->string('NIK', 20);
            $table->string('password', 15);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_tamu');
    }
}
