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
        Schema::create('user_reading_progress', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("user_id");
            $table->unsignedBigInteger("book_id");
            $table->integer("current_page")->default(1);
            $table->integer("total_pages")->nullable();
            $table->string("status",  ["reading", "completed", "paused"])->default("reading"); 
            $table->dateTime("last_read_at")->nullable();
            $table->timestamp("start_date");
            $table->timestamp("finish_date")->nullable();
            $table->timestamps();

            $table->foreign("user_id")->references("id")->on("users")->onDelete("cascade");
            $table->foreign("book_id")->references("id")->on("books")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
