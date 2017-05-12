<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRmPropertyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('rm_property', function (Blueprint $table) {
            $table->increments('id');
			$table->string('buysell');
		    $table->string('propertycategory');
            $table->string('postedby');
			$table->string('projectname');
			$table->string('locality');
			$table->string('city');
			$table->string('posessionby');
			$table->string('completedstatus');
			$table->string('ownership');
			$table->string('no_of_balconies');
			$table->string('transactiontype');
			$table->string('furnishing');
			$table->string('carpetarea');
			$table->string('facing');
			$table->string('flooring_type');
			$table->string('lengthunit');
			$table->string('project_property_position');
			$table->string('electricityload');
			$table->string('overlooking');
			$table->string('others');
			$table->string('amenities');
			$table->string('monthly_maintenence');
			$table->string('membership_club');
			$table->string('amt_dues_payable');
			$table->string('bookingamount');
			$table->string('bestprice');
			$table->string('loc_plc');
			$table->string('email')->nullable();
			$table->string('name')->nullable();
			//$table->string('password')->nullable();
			$table->float('latitude',10,7)->default(29);
			$table->float('longitude',10,7)->default(77);
			$table->bigInteger('userid')->nullable();
			$table->string('property_type')->nullable();
			$table->bigInteger('mobno')->nullable();
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
        Schema::dropIfExists('rm_property');
    }
}
