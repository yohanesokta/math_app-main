<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('soal', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('soalid');
            $table->string('Nama Soal')->nullable();
            $table->string('isi-soal');
            $table->string('jawaban1');
            $table->string('jawaban2');
            $table->string('jawaban3');
            $table->integer('kunci');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('soal');
    }
}
