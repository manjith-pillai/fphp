@extends('layouts.admin.template')

@section('content')

<!-- page_title and dscription -->
<?php
$page_title = 'User Management';
$page_description = 'Edit User';
$level1 = 'Home';
$link = '/user';
$divide1 = ' -> ';
$level2 = 'User Management';
$divide2 = ' -> ';
$level3 = 'Edit User';
?>


<!-- /.box-header -->
		<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit User</h3>
				<div class="box-tools pull-right">
					<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
					<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
				</div>
			</div>


            <!-- /.box-body -->
            <!-- form start -->
            <form class="form-horizontal" action="/admin/user/{{ $user->id }}" method="post" enctype="multipart/form-data">
				<div class="box-body">
					<!-- Update name -->
					<div class="form-group">
						<label for="inputname" class="col-sm-2 control-label">Name <span style="color:red;">*</span> :</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="inputname" placeholder="name" name="name" size="30" value="{{ $user->name }}">
								{{ ($errors->has('name')) ? $errors->first('name') : '' }}
							</div>
					</div>
				
					<!-- Update Title -->
					<div class="form-group">
						<label for="inputtitle" class="col-sm-2 control-label">Title :</label>
							<div class="col-sm-10">
								<select name="title" required>
								<option name="select">{{ $user->title }}</option>
								<option name="Mr" value="1">Mr</option>
								<option name="Mrs" value="2">Mrs</option>
								<option name="Miss" value="3">Miss</option>
								</select> 
								{{ ($errors->has('title')) ? $errors->first('title') : '' }}
							</div>
					</div>				  
				
					<!-- Update Email -->
					<div class="form-group">
						<label for="inputemail" class="col-sm-2 control-label">Email <span style="color:red;">*</span> :</label>
							<div class="col-sm-10">
								<input type="email" class="form-control" id="inputemail" placeholder="email" name="email" value="{{ $user->email }}">
								{{ ($errors->has('email')) ? $errors->first('email') : '' }}
							</div>
					</div>
				
				
				
					<!-- Update Status -->
					<div class="form-group">
						<label for="inputstatus" class="col-sm-2 control-label">Status <span style="color:red;">*</span> :</label>
							<div class="col-sm-10">
								<select name="status" required>
								<option name="select">{{ $user->status }}</option>
								<option name="Active" value="1">Active</option>
								<option name="Inactive" value="2">Inactive</option>
								<option name="Blocked" value="3">Blocked</option>
								<option name="Deleted" value="4">Deleted</option>
								</select> 
								{{ ($errors->has('status')) ? $errors->first('status') : '' }}
							</div>
					</div>

							
							
					<!-- Update Role -->
					<div class="form-group">
						<label class="col-sm-2 control-label">Role:</label>

							<div class="col-sm-10">
							<?php
							echo "<input type='checkbox' name='role[]' value='1'".((in_array('1',$new_array))?"checked":'')."/>  Admin<br>";
							
							echo "<input type='checkbox' name='role[]' value='2'".((in_array('2',$new_array))?"checked":'')."/> Manager<br>";
							
							echo "<input type='checkbox' name='role[]' value='3'".((in_array('3',$new_array))?"checked":'')."/> Guest<br>";
							
							echo "<input type='checkbox' name='role[]' value='4'".((in_array('4',$new_array))?"checked":'')."/> Agent<br>";
							
							echo "<input type='checkbox' name='role[]' value='5'".((in_array('5',$new_array))?"checked":'')."/> MCA<br>";
							
							echo "<input type='checkbox' name='role[]' value='6'".((in_array('6',$new_array))?"checked":'')."/> Team Lead<br>";
							?>
							{{ ($errors->has('role')) ? $errors->first('role') : '' }} 
							</div>
					</div>  
							
				
				
					<!-- Update Department -->
					<div class="form-group">
						<label for="inputdesignation" class="col-sm-2 control-label">Designation :</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="inputdesignation" placeholder="designation" name="designation" value="{{ $user->designation }}" size="50">
								{{ ($errors->has('designation')) ? $errors->first('designation') : '' }}
							</div>
					</div>	
				    
				
				
					<!-- Update Occupation -->
					<div class="form-group">
						<label for="inputoccupation" class="col-sm-2 control-label">Occupation :</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="inputoccupation" placeholder="occupation" name="occupation" value="{{ $user->occupation }}" size="50">
								{{ ($errors->has('occupation')) ? $errors->first('occupation') : '' }}
							</div>
					</div>	
				
				
					<!-- Update Contact -->
					<div class="form-group">
						<label for="inputnumber" class="col-sm-2 control-label">Mobile <span style="color:red;">*</span> :</label>
							<div class="col-sm-10">
								<input type="tel" class="form-control" id="inputnumber" placeholder="number" name="number" value="{{ $user->number }}">
								{{ ($errors->has('number')) ? $errors->first('number') : '' }}
							</div>
					</div>	
				
				
					<!-- Update Address -->
					<div class="form-group">
						<label for="inputaddress" class="col-sm-2 control-label">Address :</label>
							<div class="col-sm-10">
								<textarea name="address" rows="8" cols="40" class="form-control" id="inputaddress" placeholder="address" size="50">{{ $user->address }}</textarea>
								{{ ($errors->has('address')) ? $errors->first('address') : '' }}
							</div>
					</div>	
                				

					<!-- Updates image -->
					<div class="form-group">
						<label for="inputphoto" class="col-sm-2 control-label">Photo :</label>
							<div class="col-sm-10">
								<input type="file" name="image"> 
								<a href="/images/{{$user->image}}">{{$user->image}}</a> 
							</div>
					</div>
				
					<!-- /.box-footer -->
					<div class="box-footer">
						<input type="hidden" name="_method" value="put">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<button onclick="window.location='user'" class="btn btn-default">Cancel</button>
						<input type="submit" name="edit" class="btn btn-primary" value="save">
                
					</div>
				</div>
			</form>
		</div>
@endsection
