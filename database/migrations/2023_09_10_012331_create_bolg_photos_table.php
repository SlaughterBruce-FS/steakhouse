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
        Schema::create('bolg_photos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('size')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->boolean('featured')->unsigned();
            $table->unsignedBigInteger('bolg_id');
            $table->foreign('bolg_id')->references('id')->on('bolgs');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bolg_photos');
    }
};
