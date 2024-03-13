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
        Schema::create('properties', function (Blueprint $table) {

          
                $table->id();
                $table->timestamps();
                $table->string('title', 100);
                $table->text('description');
                $table->integer('numBedrooms');
                $table->integer('numBathrooms');
                $table->decimal('price', 10, 2);
                $table->enum('type', ['house', 'apartment']);
                $table->string('location');
                $table->string('propertyphoto');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
