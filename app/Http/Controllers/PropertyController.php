<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;
use DB;
use App\User;
use Auth;
use Hash;


class PropertyController extends Controller
{
    public function index()
    {
	$rm_property = DB::table('property')->paginate(8);
    return view('property.index',['rm_property' => $rm_property]);	
		
	}
	
	public function create()
    {
     
        return view('property.create');
    }

	 public function store(Request $request)
	 
    {
     $rm_property = new Property;
	 
	 if (!Auth::user()) {
		$rm_property->name = $request->fname;
		$rm_property->mobno = $request->mobno;
		$rm_property->email = $request->email;
		$rm_property->userid = Null;
	 }
	else {
		$rm_property->name =  Auth::user()->name ;
		$rm_property->mobno = Null;
		$rm_property->email = Auth::user()->email;
		$rm_property->userid = Auth::user()->id;
	 }
	 $rm_property->buysell = $request->buysell;
     $rm_property->propertycategory = $request->propcat;
	 $rm_property->postedby = $request->postedby;
	 $rm_property->projectname = $request->projname;
	 $rm_property->locality = $request->locality;
     $rm_property->city = $request->city;
	 $rm_property->posessionby = $request->posessionby;
	 $rm_property->completedstatus = $request->comp_status;
	 $rm_property->ownership = $request->ownership;
	 $rm_property->no_of_balconies = $request->no_of_balconies;
	 $rm_property->transactiontype = $request->trans_type;
	 $rm_property->furnishing = $request->furnished;
	 $rm_property->carpetarea = $request->carpetarea;
     $rm_property->facing = $request->facing;
	 $rm_property->flooring_type = $request->flooringtype;
     $rm_property->lengthunit = $request->lengthunit;
	 $rm_property->project_property_position= $request->proj_prop_position;
	 $rm_property->electricityload = $request->electricity_load;
	 $rm_property->overlooking = $request->overlooking;
	 $rm_property->others = $request->others;
	 $rm_property->amenities = array();
	 $rm_property->amenities = implode(',',$request->amenities);
	 $rm_property->monthly_maintenence = $request->monthly_maintenence;
	 $rm_property->membership_club= $request->any_membership_club;
	 $rm_property->amt_dues_payable = $request->amt_dues_pay;
	 $rm_property->bookingamount = $request->booking_amt;
	 $rm_property->bestprice = $request->bestprice;
	 $rm_property->loc_plc = $request->loc_plc;
	 ///$rm_property->email = $request->email;
	 ///$rm_property->name = $request->name;
	 //$rm_property->password = Hash::make($request->password);
	  
     $rm_property->save(); 
     if(!Auth::check())
{
        DB::insert('insert into users(email,name) values (?, ?)',[$request->email,$request->fname]);
}
    return redirect('property')->with('message','demo data has been saved!');
	
     }
	
	
	public function show($id)
    {
   $rm_property = Property::find($id);
     if(!$rm_property)
	 {
          abort(404);
     }
	return view('property.detail')->with('rm_property',$rm_property);
    }
	
	
	public function edit($id)
    {
     $rm_property = Property::find($id);
     if(!$rm_property)
		{
          abort(404);
        }
        
        return view('property.edit')->with('rm_property',$rm_property);
    }
	
	
	public function update(Request $request, $id)
    {
     $rm_property = Property::find($id);
     
	 $rm_property->buysell = $request->buysell;
     $rm_property->propertycategory = $request->propcat;
	 $rm_property->postedby = $request->postedby;
	 $rm_property->projectname = $request->projname;
	 $rm_property->locality = $request->locality;
     $rm_property->city = $request->city;
	 $rm_property->posessionby = $request->posessionby;
	 $rm_property->completedstatus = $request->comp_status;
	 $rm_property->ownership = $request->ownership;
	 $rm_property->no_of_balconies = $request->no_of_balconies;
	 $rm_property->transactiontype = $request->trans_type;
	 $rm_property->furnishing = $request->furnished;
	 $rm_property->carpetarea = $request->carpetarea;
     $rm_property->facing = $request->facing;
	 $rm_property->flooring_type = $request->flooringtype;
	 $rm_property->lengthunit = $request->lengthunit;
	 $rm_property->project_property_position= $request->proj_prop_position;
     $rm_property->electricityload = $request->electricity_load;
	 $rm_property->overlooking = $request->overlooking;
	 $rm_property->others = $request->others;
	 $rm_property->amenities = array();
	 $rm_property->amenities = implode(',',$request->amenities);
	 $rm_property->monthly_maintenence = $request->monthly_maintenence;
	 $rm_property->membership_club= $request->any_membership_club;
	 $rm_property->amt_dues_payable = $request->amt_dues_pay;
	 $rm_property->bookingamount = $request->booking_amt;
	 $rm_property->bestprice = $request->bestprice;
	 $rm_property->loc_plc = $request->loc_plc;
	  
     $rm_property->save();
      
      return redirect('property')->with('message','data has been edited!');
    }
	
	
	public function destroy($id)
    {
        $rm_property = Property::find($id);
        $rm_property->delete();
        return redirect('property')->with('message','data has been deleted!');
    }
	
	public function retrieveproperty()
	{
	 
	 $authid = Auth::user()->id;
	  
	  $rmproperty = DB::select('select * from property where userid = ?',[$authid]);
	  
return view('property.my-properties',['rmproperty' => $rmproperty]);
   }
	
	
	
	public function propertydetail(){
	  
	  $rmproperty = DB::table('property')->paginate(5);
      return view('property.propertydetail',['rmproperty' => $rmproperty]);

   }
   public function search(Request $request)
	{
		
	$property = DB::table('property')
             ->where('buysell',  '=', $request->buysell)
		    ->Where('propertycategory', '=' , $request->propcat)
		     ->Where('locality', '=' , $request->locality)
		     ->Where('ownership', '=' , $request->ownership)
		     ->get();
				  
return view('property.search',['property' => $property]);		   
	}
	
	
   }
