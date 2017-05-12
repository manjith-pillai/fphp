<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email');
			$table->string('name');
			$table->integer('UserType');
		    $table->string('password');
			$table->string('residingcity');
			$table->unsignedBigInteger('mobile_phone');
			$table->string('addresspostal_code');
			$table->string('street_address');
			$table->string('specialization');
			$table->string('primary_product');
			$table->string('years_reality_exp');
			$table->string('educational_qualification');
			$table->string('educational_specialization');
			$table->string('get_to_know_realty_matrix');
			$table->string('referred_by_other_agent');
			$table->longText('brief_profile_desc');
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
        Schema::dropIfExists('agents');
    }
}
