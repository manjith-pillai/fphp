<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Email;
use App\Notifications\EmailCreated;
//use Illuminate\Notifications\Notifiable;

class EmailController extends Controller
{
    public function index()
    {
        $emails = DB::table('email')->paginate(10);
		return view('email.index',['emails' => $emails]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('email.create');
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
            //'name'=> 'required',
		]);
        $email = new Email;
		$email->email =  $request->email;
        $email->subject = $request->subject;
		$email->message = $request->message;
		
		$email->save();
		//dd(new EmailCreated($email));
		$email->notify(new EmailCreated($email));
		
		return redirect('admin/email')->with('message','
Email has been saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $email = Email::find($id);
        
        // return to 404 page
        if(!$email){
          abort(404);
        }
        
        // display the article to single page
        return view('email.detail')->with('email',$email);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $email = Email::find($id);

        // return to 404 page
        if(!$email){
          abort(404);
        }
        // display the article to single page
        return view('email.edit')->with('email',$email);
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
		$email = Email::find($id);
		$email->email = $request->email;
        $email->subject = $request->subject;
		$email->message = $request->message;
		 
		  $email->save();
$email->notify(new EmailCreated($email));
           //redirect page after save data
          return redirect('admin/email')->with('message','value has been edited!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $email = Email::find($id);
        $email->delete();
        return redirect('admin/email')->with('message','value has been deleted!');
    }

	
	
}
