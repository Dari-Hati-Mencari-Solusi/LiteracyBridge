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
        Schema::create('user_redemptions', function (Blueprint $table) {
            $table->id('redemption_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('reward_id');
            $table->timestamp('redemption_date');
            $table->integer('points_spent');
            $table->timestamps();
            
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('reward_id')->references('id')->on('rewards')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_redemptions');
    }
};
