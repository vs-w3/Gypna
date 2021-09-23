<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('person_profiles', function (Blueprint $table) {
            $table->id();
            $table->date('birth_date')->nullable();
            $table->string('id_number')->unique()->nullable();
            $table->string('img')->nullable();
            $table->boolean('public_birth_date')->default(0);
            $table->boolean('public_id_number')->default(0);
            $table->timestamps();
        });

        Schema::create('person_profile_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('person_profile_id');
            $table->string('locale')->index();
            
            $table->string('name');
            $table->string('lastname');

            $table->unique(['person_profile_id', 'locale']);
            $table->foreign('person_profile_id')->references('id')->on('person_profiles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('person_profiles');
    }
}
