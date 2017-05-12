@extends('layouts.admin.template')

@section('content')

<!-- page_title and dscription -->
<?php $page_title = 'User Management' ?>
<?php $page_description = 'Create User' ?>
<?php $level1 = 'Home' ?>
<?php $link = '/user' ?>
<?php $divide1 = ' -> ' ?>
<?php $level2 = 'User Management' ?>
<?php $divide2 = ' -> ' ?>
<?php $level3 = 'Create User' ?>

<!-- /.box-header -->
<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Create User</h3>
              <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
            </div>
           </div>


            <!-- /.box-body -->
            <!-- form start -->
            <form class="form-horizontal" action="/admin/user" method="post" enctype="multipart/form-data">
				<div class="box-body">
					<div class="form-group">
						<label for="inputname" class="col-sm-2 control-label">Name <span style="color:red;">*</span> :</label>
					
							<div class="col-sm-10">
								<input type="text" class="form-control" id="inputname" placeholder="name" name="name" size="30">
								{{ ($errors->has('name')) ? $errors->first('name') : '' }}
							</div>
					</div>
				
					<!-- User Title -->
					<div class="form-group">
						<label for="inputtitle" class="col-sm-2 control-label">Title :</label>
				  
							<div class="col-sm-10">
								<select name="title" required>
								  <option name="select" value="" selected="selected">None</option>
								  <option name="Mr" value="1">Mr</option>
								  <option name="Mrs" value="2">Mrs</option>
								  <option name="Miss" value="3">Miss</option>
								</select> 
								{{ ($errors->has('title')) ? $errors->first('title') : '' }}
							</div>
					</div>				  
				
					<!-- User Email -->
					<div class="form-group">
						<label for="inputemail" class="col-sm-2 control-label">Email <span style="color:red;">*</span> :</label>
                   
							<div class="col-sm-10">
								<input type="email" class="form-control" id="inputemail" placeholder="email" name="email" value="">
								{{ ($errors->has('email')) ? $errors->first('email') : '' }}
							</div>
					</div>
				
				
					<!-- User Password -->
					<div class="form-group">
						<label for="inputpassword" class="col-sm-2 control-label">Password <span style="color:red;">*</span> :</label>
				    
							<div class="col-sm-10">
								<input type="password" class="form-control" id="inputpassword" placeholder="password" name="password" value="">
								{{ ($errors->has('password')) ? $errors->first('password') : '' }}
							</div>
					</div>
				
				
					<!-- User Status -->
					<div class="form-group">
						<label for="inputstatus" class="col-sm-2 control-label">Status <span style="color:red;">*</span> :</label>
				  
							<div class="col-sm-10">
								<select name="status" required>
								<option name="Active" value="1" selected="selected">Active</option>
								<option name="Inactive" value="2">Inactive</option>
								<option name="Blocked" value="3">Blocked</option>
								<option name="Deleted" value="4">Deleted</option>
								</select> 
								{{ ($errors->has('status')) ? $errors->first('status') : '' }}
							</div>
					</div>	
					
					
					<!-- User Role -->
					
					<!--<div class="form-group">
						<label for="inputrole" class="col-sm-2 control-label">Role :</label>
				  
							<div class="col-sm-10" id="dynamicInput">
								<select name="role" required>
								  <option name="guest" value="3" selected="selected">Guest</option>
								  <option name="admin" value="1">Admin</option>
								  <option name="manager" value="2">Manager</option>
								  <option name="agent" value="4">Agent</option>
								  <option name="mca" value="5">MCA</option>
								  <option name="tl" value="6">TL</option>
								</select> 
								<input type="button" value="Add" onclick="addInput('dynamicInput');" />
								{{ ($errors->has('role')) ? $errors->first('role') : '' }}
							</div>
					</div>-->
						<div class="form-group">
						  <label class="col-sm-2 control-label">Role :</label>
							<div class="col-sm-10">
								<input type="checkbox" id="1" name="role[]" value="1" size="30"> Admin<br>
								<input type="checkbox"  id="2" name="role[]" value="2" size="30"> Manager<br>
								<input type="checkbox" id="3" name="role[]" value="3" size="30"> Guest<br>
								<input type="checkbox" id="4" name="role[]" value="4" size="30"> Agent<br>
								<input type="checkbox" id="5" name="role[]" value="5" size="30"> MCA<br>
								<input type="checkbox" id="6" name="role[]" value="6" size="30"> Team Lead<br>
								{{ ($errors->has('role')) ? $errors->first('role') : '' }} 
							</div>
						</div>
					
				
				
					<!-- User Department -->
					<div class="form-group">
						<label for="inputdesignation" class="col-sm-2 control-label">Designation :</label>
				    
							<div class="col-sm-10">
								<input type="text" class="form-control" id="inputdesignation" placeholder="designation" name="designation" size="50">
								{{ ($errors->has('designation')) ? $errors->first('designation') : '' }}
							</div>
					</div>	
				    
				
				
					<!-- User Occupation -->
					<div class="form-group">
						<label for="inputoccupation" class="col-sm-2 control-label">Occupation :</label>
				    
							<div class="col-sm-10">
								<input type="text" class="form-control" id="inputoccupation" placeholder="occupation" name="occupation" size="50">
								{{ ($errors->has('occupation')) ? $errors->first('occupation') : '' }}
							</div>
					</div>	
				
				
					<!-- User Contact -->
					<div class="form-group">
						<label for="inputnumber" class="col-sm-2 control-label">Mobile <span style="color:red;">*</span> :</label>
				    
							<div class="col-sm-10">
								<input type="tel" class="form-control" id="inputnumber" placeholder="number" name="number" value="">
								{{ ($errors->has('number')) ? $errors->first('number') : '' }}
							</div>
					</div>	
					
					<!-- User Address -->
					<div class="form-group">
						<label for="inputaddress" class="col-sm-2 control-label">Address :</label>
				    
							<div class="col-sm-10">
								<textarea name="address" rows="8" cols="40" class="form-control" id="inputaddress" placeholder="address" size="50"></textarea>
								{{ ($errors->has('address')) ? $errors->first('address') : '' }}
							</div>
					</div>	
                				
                
					<!-- User Profile Picture -->
					<div class="form-group">
						<label for="inputphoto" class="col-sm-2 control-label">Photo :</label>
				  
							<div class="col-sm-10">
								<input type="file" name="image">
							</div>
					</div>  
				  
              
			  
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<!-- /.box-footer -->
					<div class="box-footer">
						<button onclick="window.location='user'" class="btn btn-default">Cancel</button>
						<button type="submit" class="btn btn-info">create</button>
					</div>
				</div>
			</form>
</div>

@endsection
<!--<script>
var choices = ["Admin", "Manager","Guest","Agent","MCA","TL"];
function addInput(divName) {
    var newDiv = document.createElement('div');
    var selectHTML = "";
    selectHTML="<select>";
    for(i = 0; i < choices.length; i = i + 1) {
        selectHTML += "<option name='" + choices[i] + "'>" + choices[i] + "</option>";
    }
    selectHTML += "</select>";
    newDiv.innerHTML = selectHTML;
    document.getElementById(divName).appendChild(newDiv);
}
</script>-->