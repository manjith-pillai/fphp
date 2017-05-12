<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MarketCenter;
use DB;

class MarketCenterController extends Controller
{
   
public function index()
    {
      $marketcenter = DB::table('marketcenter')->paginate(10);
		
		// pagination using Eloquent
        //$demos = Demo::paginate(2);
		
        // show data to our view
        return view('marketcenter.index',['marketcenter' => $marketcenter]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // we will return to our new views
        return view('marketcenter.create');
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
            //'title'=> 'required',
            //'description' => 'required',
			//'owner' => 'required',
			//'mob_no' => 'required',
			//'radio' => 'required',
			//'checked' => 'required',
        ]);

        $marketcenter = new MarketCenter;
        $marketcenter->name = $request->name;
        $marketcenter->email = $request->email;
		$marketcenter->phonenumber = $request->phoneno;
		$marketcenter->name_of_company = $request->company_name;
		$marketcenter->office_phone_no = $request->office_phone_no;
        $marketcenter->office_email = $request->office_email_id;
        $marketcenter->office_address = $request->office_address;
        $marketcenter->area_of_operations = $request->operations;
        $marketcenter->geography_handled = $request->geography;
        $marketcenter->current_team_size = 76867;
        $marketcenter->years_in_business = $request->business_years;
        $marketcenter->rm_reference = $request->rm_refrence;
        $marketcenter->realty_matrix = $request->realty_matrix;
        
		//$demo->mob_no =1666;
		//$demo->radio = 'm';
		//$demo->checked = 'dd';
		
        // save all data
        $marketcenter->save();
        //redirect page after save data
        return redirect('marketcenter')->with('message','demo data has been saved!');
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
		$marketcenter = MarketCenter::find($id);
        
        // return to 404 page
        if(!$marketcenter){
          abort(404);
        }
        
        // display the article to single page
        return view('marketcenter.detail')->with('marketcenter',$marketcenter);
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
        $marketcenter = MarketCenter::find($id);

        // return to 404 page
        if(!$marketcenter){
          abort(404);
        }
        // display the article to single page
        return view('marketcenter.edit')->with('marketcenter',$marketcenter);
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
          //'title'=> 'required',
          //'description' => 'required',
      ]);

      $marketcenter = MarketCenter::find($id);
      $marketcenter->name = $request->email;
        $marketcenter->email = $request->phoneno;
		$marketcenter->phonenumber = $request->company_name;
		$marketcenter->name_of_company = $request->company_name;
		$marketcenter->office_phone_no = $request->office_phone_no;
        $marketcenter->office_email = $request->office_email_id;
        $marketcenter->office_address = $request->office_address;
        $marketcenter->area_of_operations = $request->operations;
        $marketcenter->geography_handled = $request->geography;
        $marketcenter->current_team_size = $request->team_size;
        $marketcenter->years_in_business = $request->business_years;
        $marketcenter->rm_reference = $request->rm_refrence;
        $marketcenter->realty_matrix = $request->realty_matrix;
	  
      // save all data
      $marketcenter->save();
      //redirect page after save data
      return redirect('marketcenter')->with('message','data has been edited!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $marketcenter = MarketCenter::find($id);
        $marketcenter->delete();
        return redirect('marketcenter')->with('message','data has been deleted!');
    }

}
