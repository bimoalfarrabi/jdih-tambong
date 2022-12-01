<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->string('Judul');
            $table->string('Kategori');
            $table->integer('Nomor')->unique();
            $table->date('Tanggal_pengesahan');
            // $table->foreign('Kategori')->references('jenis')->on('kategoris');
            // $table->string('Tipe')->nullable();
            // $table->enum('Status', ['berlaku', 'tidak berlaku'] );
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
        Schema::dropIfExists('documents');
    }
};