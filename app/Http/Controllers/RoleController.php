<?php

namespace App\Http\Controllers;
use App\Role;
use App\Permission;
use Illuminate\Support\Facades\Input;
use DB;

use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = DB::table('roles')->paginate(10);
		
		return view('role.index',['roles' => $roles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('role.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'display_name' => 'required',
			'description' => 'required',
        ]);
		
		$role = new Role;
		$role->name = $request->name;
		$role->display_name = $request->display_name;
		$role->description = $request->description;
		
		$role->save();
        //redirect page after save data
        return redirect('admin/role')->with('message','Role has been saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $role = Role::find($id);
        
        // return to 404 page
        if(!$role){
          abort(404);
        }
        
        // display the article to single page
        return view('role.edit')->with('role',$role);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $this->validate($request,[
          'name' => 'required',
		  'display_name' => 'required',
          'description' => 'required',
      ]);
	  
	   $role = Role::find($id);
	   $role->name = $request->name;
	   $role->display_name = $request->display_name;
	   $role->description = $request->description;
	   $role->save();
	   return redirect('admin/role')->with('message','data has been edited!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $role = Role::find($id);
        $role->delete();
        return redirect('admin/role')->with('message','data has been deleted!');
    }
}
