<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('websites', function (Blueprint $table) {
            $table->increments('id');
            $table->string('meta_title')->nullable();
            $table->string('author')->nullable();
            $table->string('author_description')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('meta_type')->nullable();
            $table->string('logo')->nullable();
            $table->string('author_image')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->string('meta_robots')->nullable();
            $table->text('google_analytics')->nullable();
            $table->string('google_verification')->nullable();
            $table->text('alexa_analytics')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('websites');
    }
};
