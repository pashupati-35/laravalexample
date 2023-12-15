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
            $table->string('name');
            $table->integer('pageCount');
            $table->integer('point');
            $table->unsignedBigInteger('author_id');
            $table->foreign('author_id')->references('author_id')->on('authors');

            $table->unsignedBigInteger('type_id');

            $table->foreign('type_id')->references('type_id')->on('types');

            $table->timestamps();
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
