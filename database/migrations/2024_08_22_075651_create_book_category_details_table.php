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
        Schema::create('book_category_details', function (Blueprint $table) {
            $table->unsignedBigInteger("book_id");
            $table->unsignedBigInteger("book_category_id");

            $table->foreign("book_id")->references("id")->on("books")->onDelete("cascade");
            $table->foreign("book_category_id")->references("id")->on("book_categories")->onDelete("cascade");
            $table->timestamps();            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book_category_details');
    }
};
