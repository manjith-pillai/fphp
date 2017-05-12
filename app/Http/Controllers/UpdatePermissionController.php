<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
use App\Permission;
use App\Role;


class UpdatePermissionController extends Controller
{
    
	//Fetch Attached permissions from database
	public function permissionmanager($id)
	{
		$permissions = Permission::all();
		$role = Role::find($id);
		$permRole = $role->permissions()->get();
		$tests = array();
		$tests = array_fill(0,count($permissions),0);
		
		for($i=0; $i<count($permRole); $i++){
			$tests[$permRole[$i]["id"]-1] = 1;
		}
		return view('role.permission_manager',compact('permissions','role','tests'))->with($id);
	}

	//Update Permissions for a particular role
	public function updatepermission($id)
	{
		$role = Role::find($id);
		$permissions = Permission::all();
        $role->permissions()->detach();
		if(!empty(Request::Input('check'))) {
			foreach(Request::Input('check') as $key => $value) {
				$role->permissions()->attach($permissions[$key]->id);
			}
		}
        return redirect('admin/role')->with('message','Permissions has been updated');
	}
}
