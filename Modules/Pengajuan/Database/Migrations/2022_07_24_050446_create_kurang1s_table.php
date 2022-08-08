<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kurang1s', function (Blueprint $table) {
            $table->id();
            $table->string('keterangan') ;
            $table->string('jumlah');
            $table->string('tanggal')->nullable();
            $table->string('divisi');
            $table->text('catatan');

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
        Schema::dropIfExists('kurang1s');
    }
};
