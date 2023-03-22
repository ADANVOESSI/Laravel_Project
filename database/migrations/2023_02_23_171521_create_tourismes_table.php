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
        Schema::create('tourismes', function (Blueprint $table) {
            $table->id();
            $table->string('lname');
            $table->string('fname');
            $table->string('civilite');
            $table->string('image')->nullable();
            $table->foreignId('idGuide')->constrained()->references('id')->on('guides');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tourismes');

        Schema::table(function(Blueprint $table){

            $table->dropConstrainedForeignId('idGuide');

        });
    }
};
