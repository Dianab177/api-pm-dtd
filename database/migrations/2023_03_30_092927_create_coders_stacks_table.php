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
        Schema::create('coders_stacks', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('coder_id');
            $table->foreign('coder_id')->references('id')->on('coders');

            $table->unsignedBigInteger('stack_id');
            $table->foreign('stack_id')->references('id')->on('stacks');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coders_stacks');
    }
};
