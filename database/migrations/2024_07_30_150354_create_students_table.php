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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->String('fname');
            $table->String('lname');
            $table->String('email');
            $table->String('phone');
            $table->String('address')->nullable();
            $table->String('city')->nullable();
            $table->String('province')->nullable();
            $table->String('zip')->nullable();
            $table->String('birthday')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
