<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehicleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('vehiclename');
            $table->string('vehicleno');
            $table->string('companyno');
            $table->string('companycode');
            $table->string('modelno');
            $table->string('engineno');
            $table->string('chasisno');
            $table->string('permittype');
            $table->string('ins_companyname');
            $table->string('ins_companycode');
            $table->string('ins_policyno');
            $table->string('ins_date');
            $table->string('ins_expirdate');
            $table->string('ins_agentname');
            $table->string('ins_agentphone');
            $table->string('ins_amount');
            $table->string('ins_validatat');
            $table->string('fin_companyname');
            $table->string('fin_companycode');
            $table->string('fin_accountno');
            $table->string('fin_premiumtype');
            $table->string('fin_premiumamount');
            $table->string('fin_premiumdate');
            $table->integer('driverid');
            $table->integer('vehicle_status');
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
        Schema::drop('vehicles');
    }
}
