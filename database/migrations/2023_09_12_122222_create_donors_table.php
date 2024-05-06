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
        Schema::create('donors', function (Blueprint $table) {
            $table->id();
            $table->String('name');
            $table->String('email');
            $table->String('mobile');
            $table->String('country');
            $table->String('city');
            $table->String('message');
            $table->boolean('announcing_donor');
            $table->integer('money');//Donation method
            $table->String('donation_method')->default('stripe');//Donation method
            $table->enum('language', ['ar', 'en']);
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donors');
    }
};
