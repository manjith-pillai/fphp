<?php

use Illuminate\Database\Seeder;
use App\Plan;

class Plans extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Basic Plan
		$basic = new Plan;
		$basic->name = 'basic';
		$basic->display_name = 'Basic';
		$basic->description = 'Free of cost';
		$basic->save();
		
		
		// Standard Plan
		$standard = new Plan;
		$standard->name = 'standard';
		$standard->display_name = 'Standard';
		$standard->description = 'More Features for 3 months';
		$standard->save();
		
		
		// Advance Plan
		$advance = new Plan;
		$advance->name = 'advance';
		$advance->display_name = 'Advance';
		$advance->description = 'More Features for 6 months';
		$advance->save();
		
		
    }
}
