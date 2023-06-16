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
        Schema::create('myFavorite', function (Blueprint $table) {
            $table->string('Book_name', 30);
            $table->string('Author_name', 20);
            $table->string('page_number', 3);
            $table->string('qoute', 30);
            $table->timestamps();
        });
        Schema::rename('myFavorite', 'add_favorites');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('add_favorites');
    }
};
