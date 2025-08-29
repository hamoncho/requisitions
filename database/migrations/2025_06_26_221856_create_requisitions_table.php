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
        Schema::create('requisitions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('processes_id');
            $table->unsignedBigInteger('indicators_id');
            $table->unsignedBigInteger('users_id');
            $table->string('to_be_used', 255);
            $table->integer('folio')->unique()->nullable();
            $table->string('pdf_path')->nullable();
            $table->string('pdf_original_name')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('requisitions');
    }
};
