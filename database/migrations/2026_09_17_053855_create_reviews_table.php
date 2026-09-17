<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('reviews', function (Blueprint $table) {

            $table->id();

            $table->string('name');

            $table->string('email');

            $table->string('phone')->nullable();

            $table->string('country')->nullable();

            $table->string('city')->nullable();

            $table->string('image')->nullable();

            $table->unsignedTinyInteger('rating');

            $table->string('travel_type')->nullable();

            $table->date('journey_date')->nullable();

            $table->text('review');

            $table->string('status')
                ->default('pending');

            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};