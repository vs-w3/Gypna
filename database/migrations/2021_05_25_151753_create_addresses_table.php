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
            $table->unsignedBigInteger('address_type_id');
            $table->unsignedBigInteger('region_id');
            $table->unsignedBigInteger('city_id');
            $table->string('postal_code');
            $table->boolean('public')->default(0);
            $table->timestamps();
            
            $table->foreign('address_type_id')->references('id')->on('address_types')->onDelete('cascade');
        });

        Schema::create('address_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('address_id');
            $table->string('locale')->index();
            $table->string('body');

            $table->unique(['address_id', 'locale']);
            $table->foreign('address_id')->references('id')->on('addresses')->onDelete('cascade');
        });

        Schema::create('addressables', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('address_id');
            $table->unsignedBigInteger('addressable_id');
            $table->string('addressable_type');
            $table->timestamps();

            $table->unique(['address_id', 'addressable_id', 'addressable_type']);
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
