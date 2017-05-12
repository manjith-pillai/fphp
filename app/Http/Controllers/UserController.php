<?php

namespace App\Http\Controllers;


use App\User;
use App\Role;
use DB;
use Auth;
use Validator;
use Hash;
use URL;
use App\Http\TestApi;
use Illuminate\Http\Request;
use Image;
use Illuminate\Support\Facades\Input;
use App\Notifications\UsersCreated;
use Entrust;
use Excel;
use Maatwebsite\Excel\Classes\LaravelExcelWorksheet;
use Maatwebsite\Excel\Readers\ConfigReader;
use PHPExcel_IOFactory;



class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

	 
    public function index()
    {
        $users = DB::table('users')->paginate(10);
		$audits = DB::table('audits')->paginate(20);
		return view('user.index',compact('users','audits'));
    }

    /**
     * Show the form for creating a new resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		
        return view('user.create');
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
			'title' => 'required',
            'email' => 'required',
			'password' => 'required',
			'status' => 'required',
			
		
        ]);
		$user = new User;
        $user->name = $request->name;
		$user->title = $request->title;
        $user->email = $request->email;
		$user->password = $request->password;
		$user->status = $request->status;
		$user->designation = $request->designation;
		$user->occupation = $request->occupation;
		$user->number = $request->number;
		$user->address = $request->address;
		
		// uploads image
		$file = $request->file('image');
		if(file_exists($file)) {
		$filename = $file->getClientOriginalName();
		$extension = $file->getClientOriginalExtension();
		$request->file('image')->move('images/', $filename);
		$user->image = $filename;
		}
		
		$user->save();
		$roles = Role::all();
		$user->roles()->detach();
		$user->checked = array();
		$user->checked = $request->role;
		for($i=0;$i<count($user->checked);$i++) {
			$user->attachRole($user->checked[$i]);		// Attach Checked Roles to User
		}
		$user->notify(new UsersCreated($user));		// notify about user creation
		$id = $user->id;
		$user = (new TestApi)->login();					// Call to SuiteCrm Api
		$user = (new TestApi)->CreateContact($id);
		return redirect('admin/user')->with('message','user data has been saved!');
		
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
		
		$user = User::find($id);
        
        // return to 404 page
        if(!$user){
          echo "not found";
        }
        
        // display the article to single page
        return view('user.detail')->with('user',$user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $user = User::find($id);

        // return to 404 page
        if(!$user){
          abort(404);
        }
		$role = DB::Select('select role_id from role_user where user_id = ?',[$id]);
		$new_array = array();
		for($i=0;$i<count($role);$i++) {
			$new_array[$i] = $role[$i]->role_id;
		}
        return view('user.edit',compact('user','new_array'));
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
          'name'=> 'required',
		  'title' => 'required',
          'email' => 'required',
		  'status' => 'required',
		  
		  
      ]);

      $user = User::find($id);
      $user->name = $request->name;
	  $user->title = $request->title;
      $user->email = $request->email;
	  //$user->password = $request->password;
	  $user->status = $request->status;
	  
	  $user->designation = $request->designation;
	  $user->occupation = $request->occupation;
	  $user->number = $request->number;
	  $user->address = $request->address;
	  // updates image
	  $file = $request->file('image');
	  if(file_exists($file)){
	  $filename = $file->getClientOriginalName();
	  $request->file('image')->move('images/', $filename);
	  $user->image = $filename;
	  }
	  
      // save all data
		$user->save();
		$roles = Role::all();
		$user->roles()->detach();
		$user->checked = array();
		$user->checked = $request->role;
		
		for($i=0;$i<count($user->checked);$i++) {
			$user->attachRole($user->checked[$i]);
		}
      //redirect page after save data
      return redirect('admin/user')->with('message','data has been edited!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
		$user = User::find($id);
		$user->delete();
        return redirect('admin/user')->with('message','data has been deleted!');
    }
	
	
	
	// Validate User Password from existing password
	public function admin_credential_rules(array $data)
	{
	  $messages = [
		'current-password.required' => 'Please enter current password',
		'password.required' => 'Please enter password',
	  ];

	  $validator = Validator::make($data, [
		'current-password' => 'required',
		'password' => 'required|same:password',
		'password_confirmation' => 'required|same:password',     
	  ], $messages);

	  return $validator;
	}  
	
	// Change User password from existing password
	public function postCredentials(Request $request)
	{
	  if(Auth::Check())
	  {
		$request_data = $request->All();
		$validator = $this->admin_credential_rules($request_data);
		if($validator->fails())
		{
		  return response()->json(array('error' => $validator->getMessageBag()->toArray()), 400);
		}
		else
		{  
		  $current_password = Auth::User()->password;           
		  if(Hash::check($request_data['current-password'], $current_password))
		  {           
			$user_id = Auth::User()->id;                       
			$obj_user = User::find($user_id);
			$obj_user->password = Hash::make($request_data['password']);;
			$obj_user->save(); 
			return redirect()->to('/');
		  }
		  else
		  {           
			$error = array('current-password' => 'Please enter correct current password');
			return response()->json(array('error' => $error), 400);   
		  }
		}        
	  }
	  else
	  {
		return redirect()->to('/');
	  }    
	}
	
	// To verify Email
	public function verifyemail() 
	{
		$user = Auth::User();
		if($user) {
			$user->verification = 'Verified';
			$user->save();
		}
		return view('user.verifyemail');
	}
	
	//For Search in user Module
	public function search(Request $request)
	{
		$user = DB::table('users')
             ->where('name',  '=', $request->name)
		    ->orWhere('email', '=' , $request->email)
		    ->orWhere('number', '=' , $request->number)
		     ->get();
		return view('user.search',['user' => $user]);
	}
	
	//To send OTP and verify it
	public function sendcode()
	{
		$otp = "6789";
		$verify = $_POST['otpcode'];
		if($verify === $otp)
		{
			return view('user.verifyemail');
		}
		else {
			echo "Enter valid otp";
		}
		
	}
	
	// Call to sendcode method
	public function verifycode()
	{
		return $this->sendcode();
	}
	
	// Method to Import xlsx File
	public function fileImport(Request $request)
	{
		$file = $request->file('file_name');
		if(file_exists($file)){
		$filename = $file->getClientOriginalName();
		$request->file('file_name')->move('documents/', $filename);
		}
		$data = array();
        $data = Excel::load("documents/{$filename}", function($reader) {
           })->get();
			
            if($data->count()!==null){
				
                foreach ($data as $master_key => $master_value) {
					foreach($master_value as $key => $value) {
					$arr[] = 
					['id' => $value->id, 
				    'name' => $value->name,
					'title' => $value->title,
					'email' => $value->email,
					'verification' => $value->verification,
					'password' => $value->password,
					'status' => $value->status,
					'designation' => $value->designation,
					'occupation' => $value->occupation,
					'number' => $value->number,
					'address' => $value->address,
					'image' => $value->image,
					'residingcity' => $value->residingcity,
					'UserType' => $value->UserType,
					'latitude' => $value->latitude
					];
					
					}
				}
				
				if(!empty($arr))
				 {
				
                 DB::table('users')->insert($arr);
			
                }
			}
		   return redirect('admin/user')->with('message','data has been saved!');
	}
	
	
	// Method to Download xlsx File
	public function downloadExcelFile()
	{
        $data = User::get()->toArray();
        return Excel::create('newsheet', function($excel) use ($data) {
            $excel->sheet('sheet1', function($sheet) use ($data)
            {
                $sheet->fromArray($data);
            });
        })->export('xlsx');
		
    } 
	
	public function show_notifications() {
		$data = DB::Select('select data from notifications');
		foreach($data as $key => $value) {
			dd($value);
		}
		return $data;
	}
}

	

