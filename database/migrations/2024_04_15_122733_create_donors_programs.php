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
        Schema::create('donors_programs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('donors_id');
            $table->unsignedBigInteger('programs_id');
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
            $table->foreign('donor_id')->references('id')->on('donors')->onDelete('cascade');
            $table->foreign('program_id')->references('id')->on('programs')->onDelete('cascade');

         });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donors_programs');
    }
};
