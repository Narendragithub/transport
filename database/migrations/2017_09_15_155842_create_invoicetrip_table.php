<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoicetripTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoicetrip', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('invoiceid');
            $table->integer('vehicleid');
            $table->string('trip_amount');
            $table->string('total_trip');
            $table->string('total_trip_amount');
            $table->string('trip_date');
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
        Schema::drop('invoicetrip');
    }
}
