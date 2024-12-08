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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phoneNmber');
            $table->unsignedBigInteger('departmenet');
            $table->unsignedBigInteger('designation');
            $table->timestamps();

            $table->foreign('departmenet')->references('id')->on('departments')->onDelete('cascade');
            $table->foreign('designation')->references('id')->on('designations')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
