<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
<<<<<<< HEAD
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->unsignedBigInteger('status_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
        });
    }
=======
    // public function up(): void
    // {
    //     Schema::create('categories', function (Blueprint $table) {
    //         $table->id();
    //         $table->string('name');
    //         $table->string('slug');
    //         $table->unsignedBigInteger('status_id');
    //         $table->unsignedBigInteger('user_id');
    //         $table->timestamps();
    //     });
    // }
>>>>>>> origin/main

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
