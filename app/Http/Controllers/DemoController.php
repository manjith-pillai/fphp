<?php

namespace App\Http\Controllers;
use App\Demo;
use DB;
use Illuminate\Http\Request;
use App\Events\PusherEvent;
use Pusher;

class DemoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // we will create index function
        // we need to show all data from "demo" table
		// To get all the demo data
        //$demos = Demo::all();
		
		// Use query builder to get paginated data
		$demos = DB::table('demo')->paginate(10);
		
		// pagination using Eloquent
        //$demos = Demo::paginate(2);
		
        // show data to our view
        return view('demo.index',['demos' => $demos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // we will return to our new views
        return view('demo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // we will create validation function here
        $this->validate($request,[
            'title'=> 'required',
            'description' => 'required',
			'owner' => 'required',
			//'mob_no' => 'required',
			//'radio' => 'required',
			//'checked' => 'required',
        ]);

        $demo = new Demo;
        $demo->title = $request->title;
        $demo->description = $request->description;
		$demo->owner = $request->owner;
		$demo->mob_no = $request->mob_no;
		$demo->radio = $request->gender;
		$demo->checked = array();
		
       $demo->checked = implode(',',$request->category);
		
       $demo->dropdown = $request->demo;
        
		//$demo->mob_no =1666;
		//$demo->radio = 'm';
		//$demo->checked = 'dd';
		
        // save all data
        $demo->save();
        $options = array(
			'cluster' => 'ap2',
		);
		$pusher = new Pusher(
			'4202255030d4ee5a5df9',
			'334ae6537fe8fb8fda09',
			'326858',
			$options
		);

		$data['message'] = ($demo->title)." like your status";
		$pusher->trigger('my-channel', 'PusherEvent', $data);
        //redirect page after save data
        return redirect('admin/demo')->with('message','demo data has been saved!');
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
		$demo = Demo::find($id);
        
        // return to 404 page
        if(!$demo){
          abort(404);
        }
        
        // display the article to single page
        return view('demo.detail')->with('demo',$demo);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // edit function here
        $demo = Demo::find($id);

        // return to 404 page
        if(!$demo){
          abort(404);
        }
        // display the article to single page
        return view('demo.edit')->with('demo',$demo);
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
       // we will create validation function here
      $this->validate($request,[
          'title'=> 'required',
          'description' => 'required',
      ]);

      $demo = Demo::find($id);
      $demo->title = $request->title;
      $demo->description = $request->description;
	  $demo->owner = $request->owner;
	  $demo->mob_no = $request->mob_no;
		$demo->radio = $request->gender;
		$demo->checked = array();
		
		$demo->checked = implode(',',$request->category);
		
		$demo->dropdown = $request->demo;
	  
      // save all data
      $demo->save();
      //redirect page after save data
      return redirect('admin/demo')->with('message','data has been edited!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $demo = demo::find($id);
        $demo->delete();
        return redirect('admin/demo')->with('message','data has been deleted!');
    }
}
