<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('about_sections', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('subtitle')->nullable();
            $table->text('content')->nullable();
            $table->enum('content_type', ['text', 'image', 'video', 'youtube', 'gallery', 'icon'])->default('text');
            $table->string('youtube_url')->nullable();
            $table->string('icon')->nullable();
            $table->string('animation')->nullable();
            $table->integer('order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('about_sections');
    }
};