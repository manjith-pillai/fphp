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
              <h3 class="box-title">User Details</h3>
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
						<label for="inputname" class="col-sm-2 control-label">Name <span style="color:red;">*</span> :</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="inputname" placeholder="name" name="name" size="30" value="{{ $user->name }}" readonly>
							</div>
					</div>
				  <!-- Email -->
					<div class="form-group">
						<label for="inputemail" class="col-sm-2 control-label">Email <span style="color:red;">*</span> :</label>
							<div class="col-sm-10">
								<input class="form-control" id="inputemail" value="{{ $user->email }}" readonly>
							</div>
					</div>
				  
					<!-- Status -->
					<div class="form-group">
						<label for="inputstatus" class="col-sm-2 control-label">Status <span style="color:red;">*</span> :</label>
					
							<div class="col-sm-10">
								<input class="form-control" id="inputstatus" value="{{$user->status}}" readonly>
							</div>
					</div>
				  
					<!-- Designation -->
					<div class="form-group">
						<label for="inputdesignation" class="col-sm-2 control-label">Designation :</label>
					
							<div class="col-sm-10">
								<input class="form-control" id="inputdesignation" value="{{ $user->designation}}" readonly>
							</div>
					</div>
				  
					<!-- Occupation -->
					<div class="form-group">
						<label for="inputoccupation" class="col-sm-2 control-label">Occupation :</label>
					
							<div class="col-sm-10">
								<input class="form-control" id="inputoccupation" value="{{$user->occupation}}" readonly>
							</div>
					</div>
				  
					<!-- Mobile Number -->
					<div class="form-group">
						<label for="inputnumber" class="col-sm-2 control-label">Number <span style="color:red;">*</span> :</label>
					
							<div class="col-sm-10">
								<input class="form-control" id="inputnumber" value="{{$user->number}}" readonly>
							</div>
					</div>
				  
					<!-- Address -->
					<div class="form-group">
						<label for="inputaddress" class="col-sm-2 control-label">Address :</label>
					
							<div class="col-sm-10">
								<input class="form-control" id="inputaddress" value="{{$user->address}}" readonly>
							</div>
					</div>
					<!-- Image -->
					<div class="form-group">
						<label for="inputimage" class="col-sm-2 control-label">Image :</label>
					
							<div class="col-sm-10">
								<a href="/images/{{$user->image}}"><input class="form-control" id="inputimage" value="{{$user->image}}" readonly>Click Here to see Image</a>
							</div>
					</div>
					<!-- /.box-footer -->
					<div class="box-footer">
						<button onclick="window.location='user'" class="btn btn-info">Cancel</button>
					</div>
			</div>
</div>
@endsection

