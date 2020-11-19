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
            $table->string('email');
            $table->string('tel');
            $table->string('tel2')->nullable();
            $table->string('location');
            $table->string('address1')->nullable();;
            $table->string('address2')->nullable();;
            $table->string('city')->nullable();;
            $table->string('country')->nullable();;
            $table->string('fax')->nullable();;
            $table->string('facebook')->nullable();;
            $table->string('twitter')->nullable();;
            $table->string('instagram')->nullable();;
            $table->string('google')->nullable();;
            $table->string('pintrest')->nullable();;
            $table->string('youtube')->nullable();;
            $table->string('linkedin')->nullable();;
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
        Schema::dropIfExists('addresses');
    }
}
