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
        Schema::create('article', function (Blueprint $table) {
            $table->integer('id_article')->primary();
            $table->integer('id_user');
            $table->integer('id_category');
            $table->integer('id_status');
            $table->string('title_article', 255);
            $table->string('subtitle_article', 255)->nullable();
            $table->text('content_article');
            $table->text('image_article')->nullable();
            $table->date('date_article')->nullable();
            $table->foreign('id_user')->references('id_user')->on('users');
            $table->foreign('id_category')->references('id_category')->on('category');
            $table->foreign('id_status')->references('id_status')->on('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('article');
    }
};
