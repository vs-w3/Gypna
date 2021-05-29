<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('addressable_id');
            $table->string('addressable_type');
            $table->unsignedBigInteger('region_id');
            $table->unsignedBigInteger('city_id');
            $table->boolean('actual');
            $table->string('postal_code');
            $table->timestamps();
        });

        Schema::create('address_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('address_id');
            $table->string('locale')->index();
            $table->string('body');

            $table->unique(['address_id', 'locale']);
            $table->foreign('address_id')->references('id')->on('addresses')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addresses');
    }
}
