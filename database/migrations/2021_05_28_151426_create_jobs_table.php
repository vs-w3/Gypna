<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('profile_id');
            $table->date('start_date');
            $table->date('end_date');
            $table->timestamps();

            $table->foreign('profile_id')->references('id')->on('person_profiles')->onDelete('cascade');
        });

        Schema::create('job_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('job_id');
            $table->string('locale')->index();
            $table->string('name');
            $table->string('position');

            $table->unique(['job_id', 'locale']);
            $table->foreign('job_id')->references('id')->on('jobs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
}
