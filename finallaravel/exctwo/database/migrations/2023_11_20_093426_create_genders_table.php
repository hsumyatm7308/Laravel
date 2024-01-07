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
<<<<<<< HEAD
        Schema::create('genders', function (Blueprint $table) {
            $table->id();
            $table->string('regnumber');
            $table->string('gender');
            $table->string('slug');
            $table->text('remark')->nullable();
            $table->unsignedBigInteger('status_id')->default('6');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
        });
=======
        // Schema::create('genders', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('regnumber');
        //     $table->string('gender');
        //     $table->string('slug');
        //     $table->text('remark')->nullable();
        //     $table->unsignedBigInteger('status_id')->default('6');
        //     $table->unsignedBigInteger('user_id');
        //     $table->timestamps();
        // });
>>>>>>> origin/main
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('genders');
    }
};
