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
        Schema::create('news_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('parent_id')->nullable()->index();
            $table->bigInteger('lft');
            $table->bigInteger('rgt');
            $table->tinyInteger('depth');
            $table->foreignId('created_by')->constrained('users');
            $table->timestamps();
        });

        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('event_date');
            $table->mediumText('message');
            $table->foreignId('created_by')->constrained('users');
            $table->timestamps();
        });

        Schema::create('news_has_categories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained('news_categories');
            $table->foreignId('created_by')->constrained('users');
          });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news_categories');
        Schema::dropIfExists('news');
        Schema::dropIfExists('news_has_categories');
    }
};
