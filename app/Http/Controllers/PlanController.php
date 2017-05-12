<?php

namespace App\Http\Controllers;
use App\plan;
use DB;
use App\User;
use Auth;

use Illuminate\Http\Request;

class PlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
		$plans = DB::table('plans')->paginate(10);
		
		return view('plan.index',['plans' => $plans]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('plan.create');
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
		
		$plan = new Plan;
		
		$plan->name = $request->name;
		$plan->display_name = $request->display_name;
		$plan->description = $request->description;
		
		$plan->save();
        //redirect page after save data
        return redirect('admin/plan')->with('message','plan has been saved!');
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
        $plan = Plan::find($id);
        
        // return to 404 page
        if(!$plan){
          abort(404);
        }
        
        // display the article to single page
        return view('plan.edit')->with('plan',$plan);
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
	  
	   $plan = Plan::find($id);
	   $plan->name = $request->name;
	   $plan->display_name = $request->display_name;
	   $plan->description = $request->description;
	   $plan->save();
	   return redirect('admin/plan')->with('message','data has been edited!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $plan = Plan::find($id);
        $plan->delete();
        return redirect('admin/plan')->with('message','data has been deleted!');
    }
}

