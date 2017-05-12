<?php

namespace App\Http\Controllers;
use App\Document;
use App\Mail\ShareDocument;
use App\User;
use Mail;
use DB;
use Route;
use Illuminate\Http\Request;
use App\Notifications\UsersCreated;
use Illuminate\Support\Facades\Input;
use Excel;
use Maatwebsite\Excel\Classes\LaravelExcelWorksheet;
use Maatwebsite\Excel\Readers\ConfigReader;
use PHPExcel_IOFactory;
use finfo;
use Response;


class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
	
	 $documents = DB::table('document')->paginate(10);
	
	 return view('document.index',['documents' => $documents]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // we will return to our new views
        return view('document.create');
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
			
		$document = new Document;
        $document->title = $request->title;
        $document->description = $request->description;
		$allowed =  array('gif','png');
		$file = $request->file('file');
		if(file_exists($file)) {
		$extension = $file->getClientOriginalExtension();
		$filename = $file->getClientOriginalName();
		$request->file('file')->move('documents/', $filename);
	    $document->file = $filename;
		}
		
		$document->save();
        //redirect page after save data
        return redirect('admin/document')->with('message','document has been saved!');
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
		$document = Document::find($id);
        
        // return to 404 page
        if(!$document){
          abort(404);
        }
        
        // display the article to single page
        return view('document.detail')->with('document',$document);
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
        $document = Document::find($id);

        // return to 404 page
        if(!$document){
          abort(404);
        }
        // display the article to single page
        return view('document.edit')->with('document',$document);
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

      $document = Document::find($id);
      $document->title = $request->title;
      $document->description = $request->description;
	  $file = $request->file('file');
	  if(file_exists($file)) {
	  $filename = $file->getClientOriginalName();
	  $request->file('file')->move('documents/', $filename);
	  $document->file = $filename;
	  }
	  
	   $document->save();
      //redirect page after save data
      return redirect('admin/document')->with('message','document has been edited!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $document = Document::find($id);
        $document->delete();
        return redirect('admin/document')->with('message','document has been deleted!');
    }
	
	// MEthod to show Excel File
	public function showexcel($id)
    {
		$document = Document::find($id);
		$doc = $document->file;
		$inputFileType = 'Excel2007';
		$objReader = PHPExcel_IOFactory::createReader($inputFileType);
		$objReader->setReadDataOnly(true);
		$objPHPExcel = $objReader->load("documents/{$doc}");
		$objWorksheet = $objPHPExcel->getActiveSheet();
		$test = array();		
		
		foreach ($objWorksheet->getRowIterator() as $row) {
			$emptyArray = array();
			$cellIterator = $row->getCellIterator();
			$cellIterator->setIterateOnlyExistingCells(false);
			foreach ($cellIterator as $cell) {
					$emptyArray[] = $cell->getValue();
			}
			$test[] = $emptyArray;
		}
				
		return view('document.excelview')->with('test',$test);
	}
	
	//Method to download PDF
	public function pdfDownload($id)
	{
		$document = Document::find($id);
		$doc = $document->file;
		$file = public_path(). "/documents/{$doc}";
	   
		$headers = array(
				  'Content-Type: application/pdf',
				);

		return Response::download($file, $doc, $headers);
	}
}


