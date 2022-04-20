<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_reservasi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tamu_id');
            $table->integer('jml_booking')->length(2)->unsigned();
            $table->date('check-in');
            $table->date('check-out');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_reservasi');
    }
}
