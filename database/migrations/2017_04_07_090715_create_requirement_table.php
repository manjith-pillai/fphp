<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequirementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Requirement', function (Blueprint $table) 
		{
            $table->increments('id');
			$table->string('city');
		    $table->string('projectname');
            $table->string('posessionby');
			$table->string('construction_type');
			$table->string('no_of_bedrooms');
			$table->string('locality');
			$table->string('posted_by');
			$table->string('posession_date');
			$table->string('price_range');
			$table->string('area');
			$table->string('ownership');
			$table->string('no_of_toilet_baths');
			$table->string('no_of_balconies');
			$table->string('no_of_reserved_parkings');
			$table->string('transaction_type');
			$table->string('furnishing');
			$table->string('other_rooms');
			$table->string('facing');
			$table->string('flooring_type');
			$table->string('project_property_position');
			$table->string('overlooking');
			$table->string('amenities');
			$table->string('electricity_load');
			$table->string('fname');
			$table->bigInteger('mobno');
			$table->string('email');
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
        Schema::dropIfExists('Requirement');
    }
}
