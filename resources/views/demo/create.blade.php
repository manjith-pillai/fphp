@extends('layouts.admin.template')
@section('content')

<!-- page_title and dscription -->
<?php $page_title = 'Demo Management' ?>
<?php $page_description = 'Create Demo' ?>
<?php $level1 = 'Home' ?>
<?php $link = '/demo' ?>
<?php $divide1 = ' -> ' ?>
<?php $level2 = 'Demo Management' ?>
<?php $divide2 = ' -> ' ?>
<?php $level3 = 'Create Demo' ?>


<!-- /. box-header -->
<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Create Demo</h3>
              <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
            </div>
           </div>
		   
	<!-- form-open -->
    <form class="form-horizontal" action="/admin/demo" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
	
	<!-- /.box-body -->
     <div class="box-body">
	 
	 <!-- title -->
    <div class="form-group">
     <label  class="col-sm-2 control-label">Title <span style="color:red;">*</span> :</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="title" size="10"  placeholder="this is title">
			{{ ($errors->has('title')) ? $errors->first('title') : '' }}
		</div>
	</div>
	
	<!-- Demo Description -->
	<div class="form-group">		  
      <label  class="col-sm-2 control-label">Description :</label>
        <div class="col-sm-10">
			<textarea class="form-control" name="description" rows="8" cols="40" size="50" placeholder="this is description"></textarea>
                    
			{{ ($errors->has('description')) ? $errors->first('description') : '' }} 
		</div>
	</div>
	
	<!-- Owner -->
    <div class="form-group">
      <label class="col-sm-2 control-label">Owner <span style="color:red;">*</span> :</label>
        <div class="col-sm-10">
			<input type="text" class="form-control" name="owner" value="" size="30" placeholder="this is owner">
			{{ ($errors->has('owner')) ? $errors->first('owner') : '' }} 
        </div>
    </div>
	
	<!-- Mobile Number -->
	<div class="form-group">
      <label class="col-sm-2 control-label">Mobile No :</label>
        <div class="col-sm-10">
			<input type="text" class="form-control" name="mob_no" size="15" placeholder="Enter Your MobileNo">
			{{ ($errors->has('mob_no')) ? $errors->first('mob_no') : '' }} 
        </div>
    </div>
	
	<!-- Gender Radio -->
	<div class="form-group">
      <label class="col-sm-2 control-label">Gender <span style="color:red;">*</span> :</label>
        <div class="col-sm-10">
			<input type="radio" name="gender" id=""  size="10" value="male"> Male<br>
			<input type="radio" name="gender" id=""  size="10" value="female"> Female
			{{ ($errors->has('gender')) ? $errors->first('gender') : '' }} 
        </div>
    </div>
	
	
	<!-- Category checkbox -->
	<div class="form-group">
      <label class="col-sm-2 control-label">Demo Category :</label>
		<div class="col-sm-10">
			<input type="checkbox" id="1" name="category[]" value="1" size="30"> Demo Category 1<br>
			<input type="checkbox"  id="2" name="category[]" value="2" size="30"> Demo Category 2<br>
			<input type="checkbox" id="3" name="category[]" value="3" size="30"> Demo Category 3
			{{ ($errors->has('category')) ? $errors->first('category') : '' }} 
        </div>
    </div>

	<!-- Demo Categories dropdown -->
	<div class="form-group">
	  <label class="col-sm-2 control-label">Demo Categories :</label>
		<div class="col-sm-10">
			<select name="demo">
			<option id="" value="cat1" size="50">Category1</option>
			<option id="" value="cat2" size="50">Category2</option>
			<option id="" value="cat3" size="50">Category3</option>
			<option id="" value="cat3" size="50">Category4</option>
			</select>
			{{ ($errors->has('demo')) ? $errors->first('demo') : '' }} 
        </div>
    </div> 
                

              <!--/.box-footer -->
              <div class="box-footer">
                 <button onclick="window.location='demo'" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-info">create</button>
              </div>
       </div>       
     </form>
	 <!-- form-close -->

</div>
@endsection






















