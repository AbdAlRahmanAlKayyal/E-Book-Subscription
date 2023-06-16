<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

    protected $table = 'review';
    public function up(): void
    {
        Schema::create('review', function (Blueprint $table) {

            $table->string('first_name', 30);
            $table->string('last_name', 20);
            $table->string('email') ->unique();
            $table->string('reviewed', 200);

            $table->timestamps();
        });
        Schema::rename('review', 'reviews');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
