@extends('layouts.admin.template')
@section('content')


<!-- page_title and dscription -->
<?php $page_title = 'Demo Management' ?>
<?php $page_description = 'Edit Demo' ?>
<?php $level1 = 'Home' ?>
<?php $link = '/demo' ?>
<?php $divide1 = ' -> ' ?>
<?php $level2 = 'Demo Management' ?>
<?php $divide2 = ' -> ' ?>
<?php $level3 = 'Edit Demo' ?>


<!-- /.box-header -->
<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Demo</h3>
              <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
            </div>
           </div>

            
    <!-- form start -->
	
	<!-- /.box-body -->
    <form class="form-horizontal" action="/admin/demo/{{ $demo->id }}" method="post">
	  <div class="box-body">
	  
	  <!-- Demo title -->
      <div class="form-group">
      <label  class="col-sm-2 control-label">Title <span style="color:red;">*</span> :</label>
	  <div class="col-sm-10">
      <input type="text" class="form-control" name="title"   value="{{ $demo->title }}">
      {{ ($errors->has('title')) ? $errors->first('title') : '' }}
	   </div>
	   </div>
	   
	  <!-- Demo description -->
		<div class="form-group">		  
        <label  class="col-sm-2 control-label">Description :</label>
         <div class="col-sm-10">
		 <textarea class="form-control" name="description">{{ $demo->description }}</textarea>
         {{ ($errors->has('description')) ? $errors->first('description') : '' }}
		</div>
	    </div>
		
		<!-- Owner -->
        <div class="form-group">
          <label class="col-sm-2 control-label">Owner <span style="color:red;">*</span> :</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="owner"  value="{{ $demo->owner }}">
			   {{ ($errors->has('owner')) ? $errors->first('owner') : '' }} 
            </div>
        </div>
				
		<!-- Mobile Number -->		
		<div class="form-group">
           <label class="col-sm-2 control-label">Mobile No :</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="mob_no"  value="{{ $demo->mob_no }}">
					 {{ ($errors->has('mob_no')) ? $errors->first('mob_no') : '' }} 
                </div>
        </div>
		

		<!-- Gender -->
		<div class="form-group">
           <label class="col-sm-2 control-label">Gender <span style="color:red;">*</span> :</label>
                <div class="col-sm-10">
				 <input type="radio" id="" name="gender" value="male" <?php if($demo->radio=="male"){ echo "checked";}?>/> Male<br>
                 <input type="radio" name="gender"  id="" value="female" <?php if($demo->radio=="female"){ echo "checked";}?>/> Female
					 {{ ($errors->has('gender')) ? $errors->first('gender') : '' }} 
                </div>
        </div>
				
		
		<!-- Category -->
		<div class="form-group">
           <label class="col-sm-2 control-label">Demo Category :</label>

                <div class="col-sm-10">
				<?php
				$category = explode(',',$demo->checked);
			   
				echo $category[0];
				echo "<input type='checkbox' name='category[]' id='' value='1'".
				((in_array('1',$category))?"checked":'')."/>  Demo Category 1<br>";
				
				echo "<input type='checkbox' name='category[]' id='' value='2'".
				((in_array('2',$category))?"checked":'')."/> Demo Category 2<br>";
                
				echo "<input type='checkbox' name='category[]'  id='' value='3'".((in_array('3',$category))?"checked":'')."/> Demo Category 3<br>";
				
				
				?>


				{{ ($errors->has('category')) ? $errors->first('category') : '' }} 
                </div>
        </div>  
		

		<!-- Demo Categories dropdown -->
		<div class="form-group">
           <label class="col-sm-2 control-label">Demo Categories :</label>

				<div class="col-sm-10">
				<select name="demo">
				 <option id="" />{{ $demo->dropdown }}</option>
				 <option id="" value="cat1" />Category1</option>
				 <option id="" value="cat2" />Category2</option>
				 <option id="" value="cat3" />Category3</option>
				 <option id="" value="cat4" />Category4</option> 
  
				</select>
	        {{ ($errors->has('demo')) ? $errors->first('demo') : '' }} 
                </div>
		</div> 
		  
	  </div>
	  
	  
	  
	  
              <!-- /.box-footer -->
              <div class="box-footer">
				<input type="hidden" name="_method" value="put">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
				<button onclick="window.location='demo'" class="btn btn-default">Cancel</button>
                <input type="submit" name="name" class="btn btn-primary" value="save">
                
              </div>
              <!-- /.box-footer -->
            
          
    </form>
		  <!-- from-close -->
</div>
@endsection




