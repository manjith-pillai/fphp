<?php

namespace App\Http\Controllers;
use App\DemoTab;
use DB;
use Illuminate\Http\Request;
use Excel;
use Maatwebsite\Excel\Writers\LaravelExcelWriter;
use	Maatwebsite\Excel\Readers\LaravelExcelReader;
use Maatwebsite\Excel\Classes\LaravelExcelWorksheet;
use Maatwebsite\Excel\Writers\CellWriter;
use Maatwebsite\Excel\Readers\ConfigReader;
use Maatwebsite\Excel\Files\ImportHandler;
use PHPExcel_IOFactory;
use Maatwebsite\Excel\Classes\PHPExcel;

class DemoTabController extends Controller
{
	public function index()
    {
        
		$demotabs = DB::table('demotab')->paginate(10);
		
		// pagination using Eloquent
        //$demos = Demo::paginate(2);
		
        // show data to our view
        return view('demotab.index',['demotabs' => $demotabs]);
    }
	
    public function create()
	{
		return view('demotab.create');
		
	}
	public function store(Request $request)
    {
        // we will create validation function here
        $this->validate($request,[
            'name'=> 'required',
            'gender' => 'required',
			
			
        ]);

        $demotab = new DemoTab;
        $demotab->name = $request->name;
        $demotab->address = $request->address;
		$demotab->gender = $request->gender;
		$demotab->state = $request->state;
		$demotab->department = $request->dept;
		$demotab->email = $request->email;
		// save all data
        $demotab->save();
        //redirect page after save data
        return redirect('admin/demotab')->with('message','demo data has been saved!');
    }
	
   public function edit($id)
    {
		
        // edit function here
        $demotab = DemoTab::find($id);

        // return to 404 page
        if(!$demotab){
          abort(404);
        }
        // display the article to single page
        return view('demotab.edit')->with('demotab',$demotab);
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
            'gender' => 'required',
      ]);

      $demotab = DemoTab::find($id);
      $demotab->name = $request->tabname;
        $demotab->address = $request->address;
		$demotab->gender = $request->gender;
		$demotab->state = $request->state;
		$demotab->department = $request->dept;
		$demotab->email = $request->email;
	  
      // save all data
      $demotab->save();
      //redirect page after save data
      return redirect('admin/demotab')->with('message','data has been edited!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
		
        $demotab = DemoTab::find($id);
        $demotab->delete();
        return redirect('admin/demotab')->with('message','data has been deleted!');
    }
	
	 public function downloadExcelFile()
	 {
        $data = DemoTab::get()->toArray();
        return Excel::create('expertphpdemo', function($excel) use ($data) {
            $excel->sheet('sheet1', function($sheet) use ($data)
            {
                $sheet->fromArray($data);
            });
        })->download('xlsx');
    }   
	
	
}
