<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('animals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('status')->references('id')->on('statuses');
            $table->foreignId('users')->references('id')->on('users');
            $table->foreignId('breed_id')->references('id')->on('breeds');
            $table->string('additionalInfo');
            $table->string('claim')->nullable();
            $table->date('foundDate');
            $table->string('district');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animals');
    }
};
