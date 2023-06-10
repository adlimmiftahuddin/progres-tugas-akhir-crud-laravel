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
        Schema::create('data_siswas', function (Blueprint $table) {
           // $table->id();
           $table->char('idsiswa',7);
           $table->string('namasiswa',100);
           $table->enum('gender',['L','p']);
           $table->string('jurusan',100);
           $table->string('emailsiswa',100);
           $table->char('phone',20);
           $table->primary('idsiswa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_siswas');
    }
};
