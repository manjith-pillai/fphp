<?php
use App\Permission;
use App\Role;
use App\User;
use Illuminate\Support\Facades\App;
use Illuminate\Database\Seeder;

class RolesPerms extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
		// Creating Roles //
		
		//Creating Role for Admin
		$admin = new Role;
		$admin->name = 'admin';
		$admin->display_name = 'Administrator';
		$admin->description = 'Manages all accouts';
		$admin->save();
		
		
		
		//Creating Role for Manager
		$manager = new Role;
		$manager->name = 'manager';
		$manager->display_name = 'Manager';
		$manager->description = 'Comes under admin';
		$manager->save();
		
		
		//Creatinf Role for Guest
		$guest = new Role;
		$guest->name = 'guest';
		$guest->display_name = 'Guest';
		$guest->description = 'All new Users';
		$guest->save();
		
		
		//Creating Role for Agent
		$agent = new Role;
		$agent->name = 'agent';
		$agent->display_name = 'Agent';
		$agent->description = 'Medium between Admin and Guest';
		$agent->save();
		
		
		// Creating Role for Market Center Administrator
		$mca = new Role;
		$mca->name = 'mca';
		$mca->display_name = 'MCA';
		$mca->description = 'Market Center Administrator';
		$mca->save();
		
		
		//Creating Role for Team Lead
		$tl = new Role;
		$tl->name = 'tl';
		$tl->display_name = 'TL';
		$tl->description = 'Team Lead';
		$tl->save();
		
		
		// Creating Permissions //
		
		//Permission for User Management
		$usermanagement = new Permission;
		$usermanagement->name = 'User Management';
		$usermanagement->display_name = 'Manages Users';
		$usermanagement->description = 'Manages all users and Accounts';
		$usermanagement->save();
		
		
		//Permission for Reports
		$reports = new Permission;
		$reports->name = 'Reports';
		$reports->display_name = 'Reports Access';
		$reports->description = 'Can Access Reports';
		$reports->save();
		
		
		//Permission for Dashboard
		$dashboard = new Permission;
		$dashboard->name = 'Dashboard';
		$dashboard->display_name = 'Access Dashboard';
		$dashboard->description = 'Can Access Dashboard';
		$dashboard->save();
		
		
		// Attaching Permissions with Roles //
		$admin->attachPermissions(array($usermanagement,$reports,$dashboard));
		$manager->attachPermissions(array($reports,$dashboard));
		$guest->attachPermission($dashboard);
		$agent->attachPermissions(array($usermanagement,$dashboard));
		$mca->attachPermissions(array($reports,$dashboard));
		$tl->attachPermission($usermanagement);
		
		
    }
}
