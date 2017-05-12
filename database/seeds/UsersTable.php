<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
use Illuminate\Support\Facades\App;
class UsersTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
		// Admin User Creation
		$user = new User;
		$user->name = 'Admin';
		$user->password = Hash::make('admin');
		$user->email = 'admin@gmail.com';
		$user->save();
		$role = Role::where('name','admin')->get()->first();
		$user->attachRole($role);
		
		
		// Guest User creation
		$user = new User;
		$user->name = 'Guest';
		$user->password = Hash::make('guest');
		$user->email = 'guest@gmail.com';
		$user->save();
		$role = Role::where('name','guest')->get()->first();
		$user->attachRole($role);
    }
}
