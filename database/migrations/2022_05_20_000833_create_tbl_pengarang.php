<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblPengarang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_pengarang', function (Blueprint $table) {
            $table->integer('id_pengarang')->autoIncrement();
            $table->string('nama_pengarang', 50);
            $table->string('email', 50);
            $table->string('notelp', 15);
            $table->string('alamat', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_pengarang');
    }
}
