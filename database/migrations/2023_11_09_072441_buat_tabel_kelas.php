<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('kelas',function(Blueprint $table){
            $table->integer('id_kelas');
            $table->string('nama_kelas',10);
            $table->string('kompetensi_keahlian',50);
            $table->timestamps();
            $table->primary('id_kelas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('kelas');
    }
};
