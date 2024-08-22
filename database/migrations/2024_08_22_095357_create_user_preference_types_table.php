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
        Schema::create('user_preference_types', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("preference_type_id");
            $table->string("name");            

            $table->foreign("preference_type_id")->references("id")->on("user_preferences")->onDelete("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_preference_types');
    }
};
