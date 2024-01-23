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
        //
        Schema::create('santris', function (Blueprint $table) {
            $table->string('nis',20);
            $table->string('name',100);
            $table->string('password',255);
            $table->string('kelas',100);
            $table->string('kamar',100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('santris');
    }
};
