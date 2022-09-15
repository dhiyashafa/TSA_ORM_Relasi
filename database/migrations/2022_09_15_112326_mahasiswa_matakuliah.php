<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MahasiswaMatakuliah extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswa_matakuliah', function (Blueprint $table) {
            $table->id()->primary();
            $table->string('mahasiswa_id', 10);
            $table->foreign('mahasiswa_id')->references('nim')->on('mahasiswas'); 
            $table->unsignedbigInteger('matakuliah_id'); 
            $table->foreign('matakuliah_id')->references('id')->on('matakuliah'); 
            $table->char('nilai');
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
        Schema::dropIfExists('mahasiswa_matakuliah');
    }
}
