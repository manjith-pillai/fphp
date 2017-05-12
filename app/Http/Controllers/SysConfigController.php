<?php

namespace App\Http\Controllers;
use DB;
use App\SysConfig;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SysConfigController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sysconfigs = DB::table('sysconfig')->paginate(10);
		
		
		return view('sysconfig.index',['sysconfigs' => $sysconfigs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sysconfig.create');
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
		]);
        $sysconfig = new SysConfig;
		$sysconfig->name =  $request->name;
        $sysconfig->value = $request->value;
		
		$sysconfig->save();
		return redirect('admin/sysconfig')->with('message','system Config value has been saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sysconfig = SysConfig::find($id);
        
        // return to 404 page
        if(!$sysconfig){
          abort(404);
        }
        
        // display the article to single page
        return view('sysconfig.detail')->with('sysconfig',$sysconfig);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sysconfig = SysConfig::find($id);

        // return to 404 page
        if(!$sysconfig){
          abort(404);
        }
        // display the article to single page
        return view('sysconfig.edit')->with('sysconfig',$sysconfig);
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
		 
		 
		 $sysconfig = SysConfig::find($id);
		 $sysconfig->value = $request->value;
		 
		  $sysconfig->save();
           //redirect page after save data
          return redirect('admin/sysconfig')->with('message','value has been edited!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sysconfig = SysConfig::find($id);
        $sysconfig->delete();
        return redirect('admin/sysconfig')->with('message','value has been deleted!');
    }
}
