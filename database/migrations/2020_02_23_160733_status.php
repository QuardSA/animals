<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Artisan;
use Database\Seeders\status;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('statuses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->timestamps();
        });

        Artisan::call('db:seed', ['--class'=>status::class]);
    }

    public function down(): void
    {
        Schema::dropIfExists('statuses');
    }
};
