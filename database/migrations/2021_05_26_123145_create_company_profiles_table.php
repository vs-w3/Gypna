<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('tax_id')->nullable();
            $table->string('img')->nullable();
            $table->timestamps();
        });

        Schema::create('company_profile_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('company_profile_id');
            $table->string('locale')->index();

            $table->string('name');
            $table->text('description')->nullable();

            $table->unique(['company_profile_id', 'locale']);
            $table->foreign('company_profile_id')->references('id')->on('company_profiles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('company_profiles');
    }
}
