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
        Schema::create('books', function (Blueprint $table) {
            $table->id('book_id');
            $table->string('title');
            $table->string('cover_image')->nullable();
            $table->text('description');
            $table->unsignedBigInteger('author_id');
            $table->string('genre_ids');
            $table->string('category_ids');
            $table->string('tag_ids');
            $table->timestamps();


            $table->foreign('author_id')->references('author_id')->on('authors')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
