<?php

namespace App\Http\Controllers;
use App\Permission;
use DB;

use Illuminate\Http\Request;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $permissions = DB::table('permissions')->paginate(10);
		
		return view('permission.index',['permissions' => $permissions]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('permission.create');
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
            'name'=> 'required',
            'display_name' => 'required',
			'description' => 'required',
        ]);
		
		$permission = new Permission;
		
		$permission->name = $request->name;
		$permission->display_name = $request->display_name;
		$permission->description = $request->description;
		
		$permission->save();
        //redirect page after save data
        return redirect('admin/permission')->with('message','permission has been saved!');
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
        $permission = Permission::find($id);
        
        // return to 404 page
        if(!$permission){
          abort(404);
        }
        
        // display the article to single page
        return view('permission.edit')->with('permission',$permission);
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
          'name'=> 'required',
		  'display_name' => 'required',
          'description' => 'required',
      ]);
	  
	   $permission = Permission::find($id);
	   $permission->name = $request->name;
	   $permission->display_name = $request->display_name;
	   $permission->description = $request->description;
	   $permission->save();
	   return redirect('admin/permission')->with('message','data has been edited!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $permission = Permission::find($id);
        $permission->delete();
        return redirect('admin/permission')->with('message','data has been deleted!');
    }
}
