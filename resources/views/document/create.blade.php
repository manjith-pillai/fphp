@extends('layouts.admin.template')

@section('content')

<!-- page_title and dscription -->
<?php $page_title = 'Document Management' ?>
<?php $page_description = 'Create Document' ?>
<?php $level1 = 'Home' ?>
<?php $link = '/document' ?>
<?php $divide1 = ' -> ' ?>
<?php $level2 = 'Document Management' ?>
<?php $divide2 = ' -> ' ?>
<?php $level3 = 'Create Document' ?>


<!-- /.box-header -->
<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Create Document</h3>
              <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
            </div>
           </div>


            <!-- /.box-body -->
            <!-- form start -->
            <form class="form-horizontal" action="/admin/document" method="post" enctype="multipart/form-data">
              <div class="box-body">
			  
				<!-- Document Title -->
                <div class="form-group">
                  <label for="inputtitle" class="col-sm-2 control-label">Title :</label>
					
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputtitle" placeholder="title" name="title" size="30">
					{{ ($errors->has('title')) ? $errors->first('title') : '' }}
                  </div>
                </div>
				
				<!-- Description -->
				<div class="form-group">		  
                    <label  class="col-sm-2 control-label">Description :</label>
                        <div class="col-sm-10">
							<textarea class="form-control" name="description" rows="8" cols="40" size="50" placeholder="this is description"></textarea>
                    
							{{ ($errors->has('description')) ? $errors->first('description') : '' }} 
						</div>
	            </div>
				
				<!-- Upload Document -->
				<div class="form-group">
			        <label for="inputfile" class="col-sm-2 control-label">Upload File :</label>
				  
						<div class="col-sm-10">
							<input type="file" name="file">
				   
						</div>
				</div>


				
				<!--/.box-footer -->
				  <div class="box-footer">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<button onclick="window.location='document'" class="btn btn-default">Cancel</button>
					<button type="submit" class="btn btn-info">create</button>
				  </div>
       </div>       
     </form>

</div>
@endsection