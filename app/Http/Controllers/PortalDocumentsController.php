<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Document;
use DB;
class PortalDocumentsController extends Controller
{
 public function index()
    {
	
	 $portal_documents = DB::table('document')->paginate(10);
	
	 return view('portal_documents.index',['portal_documents' => $portal_documents]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // we will return to our new views
        return view('portal_documents.create');
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
			
		$portal_documents = new Document;
        $portal_documents->title = $request->title;
        $portal_documents->description = $request->description;
		$file = $request->file('file');
		if(file_exists($file)) {
		$filename = $file->getClientOriginalName();
		$request->file('file')->move('documents/', $filename);
		$portal_documents->file = $filename;
		}
		
		$portal_documents->save();
        //redirect page after save data
        return redirect('portal_documents')->with('message','document has been saved!');
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
		$portal_documents = Document::find($id);
        
        // return to 404 page
        if(!$portal_documents){
          abort(404);
        }
        
        // display the article to single page
        return view('portal_documents.detail')->with('portal_documents',$portal_documents);
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
        $portal_documents = Document::find($id);

        // return to 404 page
        if(!$portal_documents){
          abort(404);
        }
        // display the article to single page
        return view('portal_documents.edit')->with('portal_documents',$portal_documents);
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

      $portal_documents = Document::find($id);
      $portal_documents->title = $request->title;
      $portal_documents->description = $request->description;
	  $file = $request->file('file');
	  if(file_exists($file)) {
	  $filename = $file->getClientOriginalName();
	  $request->file('file')->move('documents/', $filename);
	  $portal_documents->file = $filename;
	  }
	  
	   $portal_documents->save();
      //redirect page after save data
      return redirect('portal_documents')->with('message','document has been edited!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $portal_documents = document::find($id);
        $portal_documents->delete();
        return redirect('portal_documents')->with('message','document has been deleted!');
    }
	
	public function sendmail() 
	{
		$document->notify(new UsersCreated($document));
	}
 
 
 
 
 
 
 
 
 
 }
