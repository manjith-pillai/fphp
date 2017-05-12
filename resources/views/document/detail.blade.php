@extends('layouts.admin.template')
@section('content')
<!-- page title or description -->
<?php
$page_title = 'User Management';
$page_description = 'User Details';
$level1 = 'Home';
$link = '/user';
$divide1 = ' -> ';
$level2 = 'User Management';
$divide2 = ' -> ';
$level3 = 'User Details';
?>

<!--/.box-header -->
<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Document Details</h3>
              <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
            </div>
           </div>
		   
		   <!--/.box-body -->
		    <form class="form-horizontal">
				<div class="box-body">
                  <!-- Name -->
					<div class="form-group">
						<label for="inputname" class="col-sm-2 control-label">Title <span style="color:red;">*</span> :</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="inputtitle"  name="title" size="30" value="{{ $document->title }}">
					{{ ($errors->has('title')) ? $errors->first('title') : '' }}
							</div>
					</div>
				  <!-- Email -->
					<div class="form-group">
						<label for="inputemail" class="col-sm-2 control-label">Description <span style="color:red;">*</span> :</label>
							<div class="col-sm-10">
								<textarea class="form-control" name="description">{{ $document->description }}</textarea>
					{{ ($errors->has('description')) ? $errors->first('description') : '' }}
							</div>
					</div>
				  
					<!-- Status -->
					<div class="form-group">
						<label for="inputstatus" class="col-sm-2 control-label">Upload file <span style="color:red;">*</span> :</label>
					
							<div class="col-sm-10">
								<input type="file" name="file"> 
						<a href="/documents/{{$document->file}}">{{$document->file}}</a>
							</div>
					</div>
				  
					<!-- Designation -->
					
				  
					<!-- Occupation -->
					
					<!-- Mobile Number -->
					
				  
					<!-- Address -->
					
					<!-- Image -->
				
					<!-- /.box-footer -->
					<div class="box-footer">
						<button onclick="window.location='user'" class="btn btn-info">Cancel</button>
					</div>
			</div>
</div>
@endsection

