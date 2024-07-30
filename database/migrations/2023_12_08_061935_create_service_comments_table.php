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
        Schema::create('service_comments', function (Blueprint $table) {
            $table->id();
            $table->integer('service_id');
            $table->string('name_english')->nullable();
            $table->string('name_bangla')->nullable();
            $table->string('email')->nullable();
            $table->text('service_comment_english')->nullable();
            $table->text('service_comment_bng')->nullable();
            $table->string('image')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_comments');
    }
};
