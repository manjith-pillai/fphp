<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Role;
use App\Http\TestApi;
use Auth;
use App\Subscription;
//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request;
use App\Notifications\UsersCreated;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
	
	//protected $redirectTo = '/';
	public function redirectPath()
	{
		
		return '/verifyaccount';
	}
	

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
			
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
	{
		
		$user = User::create([
		'name' => $data['name'],
		'email' => $data['email'],
        'password' => bcrypt($data['password']),
		]);
		$user->notify(new UsersCreated($user));
		$role = Role::where('name','guest')->get()->first();
		$user->attachRole($role);
		$subscription = new Subscription;
		$subscription->user_id = $user->id;
		$subscription->subscription_id = '1';
		$subscription->Subscribed_at = date('y:m:d');
		$subscription->Expiry_at = Date('y:m:d', strtotime("+30 days"));
		$subscription->save();
		$id = $user->id;
		$crm = (new TestApi)->login();
		$crm = (new TestApi)->CreateContact($id);
		return $user;
	}
}
