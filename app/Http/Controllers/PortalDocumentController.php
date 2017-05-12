<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Document;
use DB;

class PortalDocumentController extends Controller
{
    
	
	public function index()
    {
	
	 $portaldocument = DB::table('document')->paginate(10);
	
	 return view('portaldocument.index',['portaldocument' => $portaldocument]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // we will return to our new views
        return view('portaldocument.create');
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
            'title'=> 'required',
            'description' => 'required',
		]);
			
		$portaldocument = new Document;
        $portaldocument->title = $request->title;
        $portaldocument->description = $request->description;
		$file = $request->file('file');
		if(file_exists($file)) {
		$filename = $file->getClientOriginalName();
		$request->file('file')->move('documents/', $filename);
		$portaldocument->file = $filename;
		}
		
		$portaldocument->save();
        //redirect page after save data
        return redirect('portaldocument')->with('message','document has been saved!');
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
		$portaldocument = Document::find($id);
        
        // return to 404 page
        if(!$portaldocument){
          abort(404);
        }
        
        // display the article to single page
        return view('portaldocument.detail')->with('portaldocument',$portaldocument);
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
        $portaldocument = Document::find($id);

        // return to 404 page
        if(!$portaldocument){
          abort(404);
        }
        // display the article to single page
        return view('portaldocument.edit')->with('portaldocument',$portaldocument);
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
          'title'=> 'required',
          'description' => 'required',
      ]);

      $portaldocument = Document::find($id);
      $portaldocument->title = $request->title;
      $portaldocument->description = $request->description;
	  $file = $request->file('file');
	  if(file_exists($file)) {
	  $filename = $file->getClientOriginalName();
	  $request->file('file')->move('documents/', $filename);
	  $portaldocument->file = $filename;
	  }
	  
	   $portaldocument->save();
      //redirect page after save data
      return redirect('portaldocument')->with('message','document has been edited!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $portaldocument = document::find($id);
        $portaldocument->delete();
        return redirect('portaldocument')->with('message','document has been deleted!');
    }
	
	public function sendmail() 
	{
		$document->notify(new UsersCreated($document));
	}
 
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
}
