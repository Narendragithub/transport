<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrateServicingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('vehicleno');
            $table->string('autopart_name');
            $table->string('autopart_contactno');
            $table->string('city');
            $table->string('oil_change');
            $table->string('oil_amount');
            $table->string('change_parts');
            $table->string('change_parts_name');
            $table->string('parts_amount');
            $table->string('bill_no');
            $table->string('bill_amount');
            $table->string('paid_amount');
            $table->string('remaining_amount');
            $table->string('servicing_date');
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
        Schema::drop('servicings');
    }
}
