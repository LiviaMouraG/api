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
        Schema::create('treiner', function (Blueprint $table) {
            $table->id();
            $table->string("Name");
            $table->string("Age");
            $table->string("Height");
            $table->string("Weight");
            $table->string("CPF");
            $table->string("RG");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('treiner');
    }
};
