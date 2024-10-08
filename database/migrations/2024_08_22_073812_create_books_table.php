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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string("slug");
            $table->string("author");
            $table->date("publication");
            $table->string("publisher")->nullable();
            $table->decimal("price", 10, 2)->default(0);
            $table->enum("format", ["pdf", "ePub", "text"])->default("pdf");
            $table->text("description")->nullable();
            $table->integer("like", unsigned:true)->nullable()->default(0);
            $table->string("file_name");
            $table->integer("total_page")->default(0);
            $table->string("cover_name");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
