<?php

namespace App\Http\Controllers\Auth;
use DB;
use URL;
use Auth;
use Socialite;
use App\User;
use App\Role;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Foundation\Auth\RedirectsUsers;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

   use AuthenticatesUsers {
		logout as performLogout;
	}

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    //protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }
	
	// Redirect route after login authentication
	public function authenticated($request , $user)
	{
		$test = DB::select('select role_id from role_user where user_id = ?',[\Auth::User()->id]);
		//if(\Request::is('admin')) {
		if($test[0]->role_id == 1){
			return redirect('admin') ;
		}
		else{
			return redirect('/') ;
		}
	}
	
	// Logout redirection
	public function logout(Request $request)
	{
		$url = URL::previous();
		$this->performLogout($request);
		
		if (strpos($url,'admin') !== false) {
			return redirect('admin');
		}
		else {
			return redirect('/');
		}
	}
	
	// Call to service provider
	public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }
    
	// Capture Response from provider
    public function handleProviderCallback($provider)
    {
     //no validation here, have to be done

        $user = Socialite::driver($provider)->user();
         
        // stroing data to our use table and logging them in
        $data = [
            'name' => $user->getName(),
            'email' => $user->getEmail()
        ];
		
        Auth::login(User::firstOrCreate($data));
		/*$my_user = User::where('email','=',$user->getEmail())->first();
		$role = Role::where('name','guest')->get()->first();
		$my_user->attachRole($role);*/
        //after login redirecting to home page
        return redirect('/');
    }	
	
}