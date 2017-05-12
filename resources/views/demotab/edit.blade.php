@extends('layouts.admin.template')
@section('content')

<!-- page_title and dscription -->
<?php $page_title = 'Demotab Management' ?>
<?php $page_description = 'Edit Demotab' ?>
<?php $level1 = 'Home' ?>
<?php $link = '/demotab' ?>
<?php $divide1 = ' -> ' ?>
<?php $level2 = 'Demotab Management' ?>
<?php $divide2 = ' -> ' ?>
<?php $level3 = 'Edit Demotab' ?>


<!-- /.box-header -->
<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Demotab</h3>
              <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
            </div>
           </div>
            
    <!-- form start -->
<form class="form-horizontal" action="/demotab/{{ $demotab->id }}" method="post">

	<!-- /.box-body -->
  <div class="box-body">
      
      
    <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#form1">Form 1</a></li>
    <li><a data-toggle="tab" href="#form2">Form 2</a></li>
    <li><a data-toggle="tab" href="#form3">Form 3</a></li>
    
     </ul>
  <div class="tab-content">
     <!-- Demotab 1 -->
     <div id="form1" class="tab-pane fade in active">
	
       <div class="form-group">
         <label  class="col-sm-2 control-label">Name <span style="color:red;">*</span> :</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="tabname"   value="{{ $demotab->name }}">
	{{ ($errors->has('tabname')) ? $errors->first('tabname') : '' }}
	  </div>
       </div>
	   

      <div class="form-group">		
        <label  class="col-sm-2 control-label">Address :</label>
         <div class="col-sm-10">
            <textarea class="form-control" name="address" rows="8" cols="40"> {{ $demotab->address }}</textarea>
                    
	{{ ($errors->has('address')) ? $errors->first('address') : '' }} 
	
	  </div>
      </div>
    </div>
	 
   <!-- Demotab 2 -->
   <div id="form2"  name= "form2" class="tab-pane fade">
      
     <div class="form-group">
       <label  class="col-sm-2 control-label">Gender <span style="color:red;">*</span> :</label>
         <div class="col-sm-10">
           <input type="radio" name="gender" id="" value="male" <?php if($demotab->gender=="male"){ echo "checked";}?>/> Male<br>
           <input type="radio" name="gender"  id="" value="female" <?php if($demotab->gender=="female"){ echo "checked";}?>/> Female
		 {{ ($errors->has('gender')) ? $errors->first('gender') : '' }} 
	</div>
     </div>
	   

     <div class="form-group">		
      <label  class="col-sm-2 control-label">State :</label>
         <div class="col-sm-10">
		<select name="state">
		<option id="" >{{  $demotab->state  }}</option>
                <option value="mp">MP</option>
  		<option value="up">UP</option>
  
		</select>
                    
	{{ ($errors->has('state')) ? $errors->first('state') : '' }} 
	
         </div>
    </div>
  </div>
	 
  <!-- Demotab 3 -->
  <div id="form3" class="tab-pane fade">
     <div class="form-group">
      <label  class="col-sm-2 control-label">Department <span style="color:red;">*</span> :</label>
        <div class="col-sm-10">
           <select name="dept">
		   <option id="">{{  $demotab->department  }}</option>
           <option value="dept1">Department 1</option>
           <option value="dept2">Department 2</option>
  
	       </select>
	{{ ($errors->has('dept')) ? $errors->first('dept') : '' }}
	    </div>
	  </div>
	   
     <div class="form-group">
       <label  class="col-sm-2 control-label">Email Address <span style="color:red;">*</span> :</label>
         <div class="col-sm-10">
            <input type="text" class="form-control" name="email"   value="{{ $demotab->email }}">
	{{ ($errors->has('email')) ? $errors->first('email') : '' }}
         </div>
     </div>
	 <!--.box-footer-->
          <div class="box-footer">
	        <input type="hidden" name="_method" value="put">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
				<button onclick="window.location='demotab'" class="btn btn-default">Cancel</button>
                <input type="submit" name="name" class="btn btn-primary" value="save">
                
          </div>
            
   </div>   
		  
  </div>
 </div>
</form>
</div>
@endsection
  
  
  


