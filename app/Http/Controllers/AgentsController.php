<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Agents;
use App\User;
use App\Http\TestApi;
use Hash;
use App\Notifications\AgentCreated;
use DB;
class AgentsController extends Controller
{
  
public function index()
    {
		
		$agents = DB::table('agents')->paginate(6);
		return view('agents.index',['agents' => $agents]);
    }

public function create()
    {
        
        return view('agents.create');
    }

	public function store(Request $request)
    {

		//$hidden = $request->usertype;

        // we will create validation function here
        //$this->validate($request,[
           // 'email'=> 'required',
            ///'mobile_phone' => 'required',
			
       // ]);

        $agents = new Agents;
        $agents->email = $request->email;
        $agents->name = $request->name;
		$agents->UserType = '2';
		$agents->password = Hash::make($request->password);
		$agents->mobile_phone = $request->mob_phone;
		$agents->residingcity = $request->residing_city;
	    $agents->addresspostal_code = $request->address_postal_code;
		$agents->street_address = $request->street_address;
		$agents->specialization = $request->specialization;
		$agents->primary_product = $request->primary_prod_cat;
		$agents->years_reality_exp = $request->years_relaty_exp;
		$agents->educational_qualification = $request->edu_qualification;
		$agents->educational_specialization = $request->edu_specialization;
		$agents->get_to_know_realty_matrix = $request->get_to_know_realtymatrix;
		$agents->referred_by_other_agent = $request->refered_other_agent;
		$agents->brief_profile_desc = $request->desc;
		
		$agents->save();
		$agents->notify(new AgentCreated($agents));
		$user = new User;
		$user->name = $agents->name;
		$user->email = $agents->email;
		$user->password = $agents->password;
		$user->UserType = $agents->UserType;
		$user->save();
		$id = $agents->id;
		$agents = (new TestApi)->login();
		$agents = (new TestApi)->CreateUser($id);
		

		//DB::insert('insert into users(email,name,password) values (?, ?, ?)',[$agents->email,$agents->name,$agents->password]);
		
		//
        //redirect page after save data
       //return redirect('agents')->with('message','agents data has been saved!');

        //redirect page after save data
       return view('verifyaccount');

	   
    }
	
	

	public function show($id)
    {
        
		$agents = Agents::find($id);
		if(!$agents)
		{
         abort(404);
        }
	  
        
        return view('agents.detail')->with('agents',$agents);
		
		
    }
	
    public function edit($id)
    {
        // edit function here
        $agents = Agents::find($id);

        // return to 404 page
        if(!$agents){
          abort(404);
        }
        // display the article to single page
        return view('agents.edit')->with('agents',$agents);
    }

	public function update(Request $request, $id)
		{
		   // we will create validation function here
		  $this->validate($request,[
			  'email'=> 'required',
			  'mobile_phone' => 'required',
		  ]);

		  $agents = new Agents;
			$agents->email = $request->email;
			$agents->name = $request->name;
			$agents->password = $request->password;
			$agents->mobile_phone = $request->mob_phone;
			$agents->addresspostal_code = $request->address_postal_code;
			$agents->street_address = $request->street_address;
			$agents->specialization = $request->specialization;
			$agents->primary_product = $request->primary_prod_cat;
			$agents->years_reality_exp = $request->years_relaty_exp;
			$agents->educational_qualification = $request->edu_qualification;
			$agents->educational_specialization = $request->edu_specialization;
			$agents->get_to_know_realty_matrix = $request->get_to_know_realtymatrix;
			$agents->referred_by_other_agent = $request->refered_other_agent;
			$agents->bank_ifsc_code = $request->ifsc_code;
		  
		  // save all data
		  $agents->save();
		  //redirect page after save data
		  return redirect('agents')->with('message','data has been edited!');
		}

	public function destroy($id)
		{
			$agents = agents::find($id);
			$agents->delete();
			return redirect('agents')->with('message','data has been deleted!');
		}
}
