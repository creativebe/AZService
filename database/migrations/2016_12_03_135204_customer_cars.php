<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CustomerCars extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_cars', function (Blueprint $table){
            $table->integer('customer_id')->unsigned();
            $table->integer('car_id')->unsigned();

            $table->foreign('customer_id')->references('id')->on('users')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('car_id')->references('id')->on('cars')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->primary(['customer_id', 'car_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_cars');
    }
}
