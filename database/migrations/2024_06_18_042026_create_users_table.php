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
        Schema::create('users', function (Blueprint $table) {
            $table->integer('id_user')->primary();
            $table->integer('id_role');
            $table->string('name_user', 255);
            $table->char('phone_user', 10)->nullable();
            $table->string('address_user', 255)->nullable();
            $table->string('email', 100);
            $table->string('password', 100);
            $table->string('avatar_user', 255)->nullable();
            $table->foreign('id_role')->references('id_role')->on('role');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
