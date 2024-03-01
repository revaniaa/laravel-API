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
        Schema::create('komens', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user');
            $table->text('content');
            $table->unsignedBigInteger('id_photo');
            $table->string('username');
            // $table->string('commentable_type');
            $table->timestamps();

            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_photo')->references('id_photo')->on('gallery')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('komens');
    }
};
