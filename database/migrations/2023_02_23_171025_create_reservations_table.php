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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->string('hotel');
            $table->date('date_Arr');
            $table->date('date_Sort');
            $table->integer('adult');
            $table->integer('child');
            $table->string('room');
            $table->integer('nbr_room');
            $table->foreignId('userID')->constrained()->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');

        Schema::table(function(Blueprint $table){

            $table->dropConstrainedForeignId('userID');

        });
    }
};
