<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Requirement;
use DB;
use Auth;
use Hash;

class RequirementController extends Controller
{
	
	
	public function index()
    {
		$RMRequirement = DB::table('requirement')->paginate(2);
		return view('requirement.index',['RMRequirement' => $RMRequirement]);	
	}

	
	public function create()
    {
		return view('requirement.create');
    }
	
	
	public function store(Request $request)
    {
		
		$this->validate($request,[
         ]);
		
		$RMRequirement = new Requirement;
		if (!Auth::user()) {
				$RMRequirement->fname = $request->fname;
				$RMRequirement->mobno = $request->mobno;
				$RMRequirement->email = $request->email;
			}
		else{
				$RMRequirement->fname =  Auth::user()->name ;
				$RMRequirement->mobno = 21321323;
				$RMRequirement->email = Auth::user()->email;
			}
		$RMRequirement->city = $request->city;
		$RMRequirement->projectname = $request->proj_name;
		$RMRequirement->posessionby = $request->posessionby;
		$RMRequirement->construction_type = $request->construction_type;
		$RMRequirement->no_of_bedrooms = $request->no_of_bedrooms;
		$RMRequirement->locality = $request->locality;
		$RMRequirement->posted_by = $request->postedby;
		$RMRequirement->posession_date = $request->posessiondate;
		$RMRequirement->price_range = $request->pricerange;
		$RMRequirement->area = $request->area;
		$RMRequirement->ownership = $request->ownership;
		$RMRequirement->no_of_toilet_baths = $request->no_of_toilet_baths;
		$RMRequirement->no_of_balconies = $request->no_of_balconies;
		$RMRequirement->no_of_reserved_parkings = $request->no_of_reserved_parkings;
		$RMRequirement->transaction_type = $request->trans_type;
		$RMRequirement->furnishing = $request->furnished;
		$RMRequirement->facing = $request->facing;
		$RMRequirement->flooring_type = array();
		$RMRequirement->flooring_type = implode(',',$request->flooringtype);
		$RMRequirement->project_property_position = $request->project_property_position;
		$RMRequirement->other_rooms = array();
		$RMRequirement->other_rooms = implode(',',$request->other_rooms);
		$RMRequirement->overlooking = $request->overlooking;
		$RMRequirement->amenities = array();
		$RMRequirement->amenities = implode(',',$request->amenities);
		$RMRequirement->electricity_load = $request->electricity_load;
			
		$RMRequirement->save();
		if(!Auth::check()){
			DB::insert('insert into users(email,name) values (?, ?)',[$request->email,$request->fname]);
			}
		return redirect('requirement')->with('message','demo data has been saved!');
	}
	
	public function show($id)
    {
		$RMRequirement = Requirement::find($id);
		if(!$RMRequirement){
          abort(404);
        }
		return view('requirement.detail')->with('RMRequirement',$RMRequirement);
    }
	
	public function edit($id)
    {
		$RMRequirement = Requirement::find($id);
		if(!$RMRequirement){
          abort(404);
        }
		return view('requirement.edit')->with('RMRequirement',$RMRequirement);
	}
	
	
	public function update(Request $request, $id)
    {
		$RMRequirement = Requirement::find($id);       
		$RMRequirement->city = $request->city;
		$RMRequirement->projectname = $request->proj_name;
		$RMRequirement->posessionby = $request->posessionby;
		$RMRequirement->construction_type = $request->construction_type;
		$RMRequirement->no_of_bedrooms = $request->no_of_bedrooms;
		$RMRequirement->locality = $request->locality;
		$RMRequirement->posted_by = $request->postedby;
		$RMRequirement->posession_date = $request->posessiondate;
		$RMRequirement->price_range = $request->pricerange;
		$RMRequirement->area = $request->area;
		$RMRequirement->ownership = $request->ownership;
		$RMRequirement->no_of_toilet_baths = $request->no_of_toilet_baths;
		$RMRequirement->no_of_balconies = $request->no_of_balconies;
		//$RMRequirement->no_of_reserved_parkings = $request->no_of_reserved_parkings;
		$RMRequirement->transaction_type = $request->trans_type;
		$RMRequirement->furnishing = $request->furnished;
		$RMRequirement->facing = $request->facing;
		$RMRequirement->flooring_type = array();
		$RMRequirement->flooring_type = implode(',',$request->flooringtype);
		$RMRequirement->project_property_position = $request->project_property_position;
		$RMRequirement->other_rooms = array();
		$RMRequirement->other_rooms = implode(',',$request->other_rooms);
		$RMRequirement->overlooking = $request->overlooking;
		$RMRequirement->amenities = array();
		$RMRequirement->amenities = implode(',',$request->amenities);
		$RMRequirement->electricity_load = $request->electricity_load;
		$RMRequirement->save();
		return redirect('requirement')->with('message','data has been edited!');
    }
	
	public function destroy($id)
    {
        $RMRequirement = Requirement::find($id);
        $RMRequirement->delete();
        return redirect('requirement')->with('message','data has been deleted!');
    }
}
