<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

   protected $table = 'add_new_books';
    public function up(): void
    {
        Schema::create('add_new_books', function (Blueprint $table) {
            $table->string('Book_name', 30);
            $table->string('Author_name', 20);
            $table->string('Summary', 100);
            $table->string('ISBN', 30);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('add_new_books');
    }
};
