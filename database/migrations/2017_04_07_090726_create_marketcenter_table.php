<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarketcenterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::create('marketcenter', function (Blueprint $table) 
		{
            $table->increments('id');
			$table->string('name');
            $table->string('email')->unique;
            $table->bigInteger('phonenumber'); 
            $table->string('name_of_company'); 
            $table->bigInteger('office_phone_no'); 
            $table->string('office_email')->unique; 
            $table->string('office_address'); 
            $table->string('area_of_operations'); 
            $table->string('geography_handled'); 
            $table->bigInteger('current_team_size');
            $table->bigInteger('years_in_business');
            $table->string('rm_reference');
            $table->string('realty_matrix');
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
       Schema::dropIfExists('marketcenter');
    }
}
