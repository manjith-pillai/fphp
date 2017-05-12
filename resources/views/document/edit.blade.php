@extends('layouts.admin.template')
@section('content')
<!-- page_title and dscription -->
<?php $page_title = 'Document Management' ?>
<?php $page_description = 'Edit Document' ?>
<?php $level1 = 'Home' ?>
<?php $link = '/document' ?>
<?php $divide1 = ' -> ' ?>
<?php $level2 = 'Document Management' ?>
<?php $divide2 = ' -> ' ?>
<?php $level3 = 'Edit Document' ?>

<!-- /.box-header -->
<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Document</h3>
              <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
            </div>
           </div>

            
            <!-- /.box-body -->
            <!-- form start -->
    <form class="form-horizontal" action="/admin/document/{{ $document->id }}" method="post" enctype="multipart/form-data">
	  <div class="box-body">
	  
	  
	  <!-- Document title -->
		<div class="form-group">
			<label  class="col-sm-2 control-label">Title :                                   <span style="color:red;">*</span></label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="title"   value="{{ $document->title }}">
					{{ ($errors->has('title')) ? $errors->first('title') : '' }}
				</div>
	    </div>
	   
	   
	   <!-- Document Description -->
		<div class="form-group">		  
			<label  class="col-sm-2 control-label">Description :</label>
				<div class="col-sm-10">
					<textarea class="form-control" name="description">{{ $document->description }}</textarea>
					{{ ($errors->has('description')) ? $errors->first('description') : '' }}
				</div>
	    </div>
		
		
		<!-- Upload Document -->
		<div class="form-group">
			<label for="inputfile" class="col-sm-2 control-label">Upload File :</label>
				<div class="col-sm-10">
					<input type="file" name="file"> 
						<a href="/documents/{{$document->file}}">{{$document->file}}</a>
				</div>
        </div>
    
		
		
              <!-- /.box-footer -->
              <div class="box-footer">
				<input type="hidden" name="_method" value="put">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
				<button onclick="window.location='document'" class="btn btn-default">Cancel</button>
                <input type="submit" name="edit" class="btn btn-primary" value="save">
                
              </div>
         
        </div>  
	</form>
</div>
@endsection