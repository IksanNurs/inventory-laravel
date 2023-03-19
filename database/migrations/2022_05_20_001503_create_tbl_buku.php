<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblBuku extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_buku', function (Blueprint $table) {
            $table->integer('id_buku', 11)->autoIncrement();
            $table->string('judul_buku', 100);
            $table->integer('id_pengarang');
            $table->smallInteger('jml_halaman');
            $table->string('nomor_isbn', 30);
            $table->year('tahun_terbit');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_buku');
    }
}
