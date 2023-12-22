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
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->foreignId('id_franchise')->constrained('franchises')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('rating_imdb');
            $table->float('rating_kp');
            $table->string('poster', 255);
            $table->integer('year');
            $table->string('country', 50);
            $table->foreignId('genre_id_one')->constrained('genres')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('genre_id_two')->constrained('genres')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('genre_id_three')->constrained('genres')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('budget');
            $table->integer('age');
            $table->integer('time');
            $table->text('description');
            $table->string('trailer', 255);
            $table->string('video', 255);
            $table->string('episodes', 20);
            $table->set('type', ['movie', 'tv-series', 'cartoon'])->default('movie');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
