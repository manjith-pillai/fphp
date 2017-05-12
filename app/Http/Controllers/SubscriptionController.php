<?php

namespace App\Http\Controllers;
use DB;
use App\Plan;
use App\Subscription;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubscriptionController extends Controller
{
    public function index()
    {
        
		$subscriptions = DB::table('plans')->paginate(10);
		
		return view('subscription.index',['subscriptions' => $subscriptions]);
    }
	
	public function edit($id) 
	{
		$subscription = Plan::find($id);
		return view('subscription.plans')->with('subscription',$subscription);
	}
	
	public function update($id) 
	{
		//$subscribe = Subscription::find($id);
		$subscription = new Subscription;
		$subscription->user_id = Auth::User()->id;
		$subscription->subscription_id = $id;
		$subscription->Subscribed_at = date('y:m:d');
		if($id==2) {
			$subscription->Expiry_at = Date('y:m:d', strtotime("+15 days"));
		}
		elseif($id==3) {
			$subscription->Expiry_at = Date('y:m:d', strtotime("+10 days"));
		}
		else {
			$subscription->Expiry_at = Date('y:m:d', strtotime("+30 days"));
		}
		$subscription->save();
		//$user = Auth::User()->id;
		//DB::insert('insert into subscription(user_id, subscription_id) values (?, ?)',[$user, $id]);
		return view('subscription.payment');
	} 
}
