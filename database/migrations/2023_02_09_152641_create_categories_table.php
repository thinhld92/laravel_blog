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
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('slug')->unique();
            $table->string('description')->nullable();
            $table->string('image')->nullable();
            $table->string('font_icon')->nullable();
            $table->integer('parent_id')->unsigned()->nullable();
            $table->smallInteger('show_in_menu')->default(1);
            $table->smallInteger('show_in_home')->default(1);
            $table->smallInteger('status')->default(1);
            $table->string('seo_alias')->nullable();
            $table->string('seo_title')->nullable();
            $table->string('seo_meta_keywords')->nullable();
            $table->string('seo_meta_description')->nullable();
            $table->timestamps();

            $table->foreign('parent_id')->references('id')->on('categories')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
};
