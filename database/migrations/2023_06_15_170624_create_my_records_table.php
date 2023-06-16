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
        Schema::create('my_record', function (Blueprint $table) {
            $table->string('Book_name', 30);
            $table->string('Last_page', 20);
            $table->date('Reading_start_date');

            $table->timestamps();
        });
        Schema::rename('my_record', 'my_records');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
       //
    }
};
