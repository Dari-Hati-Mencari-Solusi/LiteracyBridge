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
        Schema::create('user_preference_details', function (Blueprint $table) {            
            $table->unsignedBigInteger("user_id");
            $table->unsignedBigInteger("preference_id");
            $table->unsignedBigInteger("preference_type_id");

            $table->foreign("user_id")->references("id")->on("users")->onDelete("cascade");
            $table->foreign("preference_id")->references("id")->on("user_preferences")->onDelete("cascade");
            $table->foreign("preference_type_id")->references("id")->on("user_preference_types")->onDelete("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_preference_details');
    }
};
