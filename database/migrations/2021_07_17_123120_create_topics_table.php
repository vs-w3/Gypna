<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTopicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('topics', function (Blueprint $table) {
            $table->id();
            $table->string('img')->nullable();
            $table->dateTime('topic_start')->nullable();
            $table->dateTime('topic_end')->nullable();
            $table->json('break')->nullable();
            $table->boolean('active')->default(false);
            $table->timestamps();
        });

        Schema::create('topic_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('topic_id');
            $table->string('locale')->index();

            $table->string('name');

            $table->unique(['topic_id', 'locale']);
            $table->foreign('topic_id')->references('id')->on('topics')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('topics');
    }
}
