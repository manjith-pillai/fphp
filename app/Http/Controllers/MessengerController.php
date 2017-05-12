<?php

namespace App\Http\Controllers;
use DB;
use App\Messenger;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MessengerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $messengers = DB::table('messenger')->paginate(10);
		
		return view('messenger.index',['messengers' => $messengers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('messenger.create');
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
            'title' => 'required',
			'message' => 'required',
        ]);
		
		$messenger = new Messenger;
		$messenger->title = $request->title;
		$messenger->message = $request->message;
		
		$messenger->save();
        //redirect page after save data
        return redirect('admin/messenger')->with('message','message has been sent!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $messenger = Messenger::find($id);
        
        // return to 404 page
        if(!$messenger){
          abort(404);
        }
        
        // display the article to single page
        return view('messenger.edit')->with('messenger',$messenger);
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
          'title' => 'required',
          'message' => 'required',
      ]);
	  
	   $messenger = Messenger::find($id);
	   $messenger->title = $request->title;
	   $messenger->message = $request->message;
	   $messenger->save();
	   return redirect('admin/messenger')->with('message','message has been edited!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $messenger = Messenger::find($id);
        $messenger->delete();
        return redirect('admin/messenger')->with('message','message has been deleted!');
    }
}
