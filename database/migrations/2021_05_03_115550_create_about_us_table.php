<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutUsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_us_cats', function (Blueprint $table) {
            $table->id();
            $table->string('identifier');
            $table->timestamps();
        });
        
        Schema::create('about_us', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cat_id');
            $table->string('img')->nullable();
            $table->timestamps();

            $table->foreign('cat_id')->references('id')->on('about_us_cats')->onDelete('cascade');
        });

        Schema::create('about_us_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('about_us_id');
            $table->string('locale');

            $table->string('title');
            $table->text('body');

            $table->unique(['about_us_id', 'locale']);
            $table->index('locale');
            $table->foreign('about_us_id')->references('id')->on('about_us')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('about_us');
    }
}
