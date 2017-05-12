@extends('layouts.admin.template')

@section('content')

@if (session('message'))
    <div class="alert alert-success fade in">
       <a href="" class="close" data-dismiss="alert">&times;</a>
       <strong>Success!</strong> {{ Session::get('message') }}
    </div>
@endif

<?php $page_title = 'User Management' ?>
<?php $page_description = 'Search User' ?>
<?php $level1 = 'Home' ?>
<?php $divide1 = ' -> ' ?>
<?php $level2 = 'User Management' ?>
<?php $level3 = 'Search Users'?>
<!-- /.box-header -->
<div class="box box-primary">
            <div class="box-header with-border">
				<h3 class="box-title">View User</h3>
				<a href="/admin/user/create"><i class="fa fa-plus-square-o fa-1g" aria-hidden="true" style="margin-left:50px; font-size:21px" title="create"></i></a>
				
				
				<div class="box-tools pull-right">
					<button type="button" class="btn btn-box-tool" ><i class="fa fa-search" onclick="search()"></i></button>
					<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
				</div>
				
			</div>
			<div id="searchform" style="display:none;">
				<form action="/admin/search" method="post" id="myForm">
		   <input type="hidden" name="_token" value="{{ csrf_token() }}">
		   <div class="form-group">
						<label for="inputname" class="col-sm-1 control-label">Name <span style="color:red;">*</span> :</label>
					
							<div class="col-sm-11">
								<input type="text" class="form-control" id="inputname" placeholder="name" name="name" style="width:350px;">
								{{ ($errors->has('name')) ? $errors->first('name') : '' }}
							</div>
					</div><!-- form group -->
					
					<div class="form-group">
						<label for="inputemail" class="col-sm-1 control-label" name="email">Email <span style="color:red;">*</span> :</label>
                   
							<div class="col-sm-11">
								<input type="email" class="form-control" id="inputemail" placeholder="email" name="email" style="width:350px;">
								{{ ($errors->has('email')) ? $errors->first('email') : '' }}
							</div>
					</div><!-- form-group -->
					
					<div class="form-group">
						<label for="inputnumber" class="col-sm-1 control-label">Mobile<span style="color:red;">*</span>:</label>
				    
							<div class="col-sm-11">
								<input type="tel" class="form-control" id="inputnumber" placeholder="number" name="number"  style="width:350px;">
								{{ ($errors->has('number')) ? $errors->first('number') : '' }}
							</div>
					</div>	<!-- form-group -->
					
					<div class="form-group">
						<label for="inputnumber" class="col-sm-1 control-label">Role<span style="color:red;">*</span>:</label>
				    
							<div class="col-sm-11">
							 <div class="select-wrapper">
                               <select name="role" class="form-control" required style="width:350px;">
  <option value="admin">Admin</option>
  <option value="manager">Manager</option>
  <option value="guest">Guest</option>
  <option value="agent">Agent</option>
  <option value="mca">MCA</option>
  <option value="tl">TL</option>
</select>
								{{ ($errors->has('role')) ? $errors->first('role') : '' }}
							</div><!-- select-wrapper-->
							</div><!-- col-sm-11 -->
					</div>	<!-- form-group -->
					
				<div class="form-group">
                                               
				
                <input type="submit" name="search" class="btn btn-primary" value="Search" style="  margin-left: 159px;
    margin-top: 20px;">
	
	<input type="button" name="clear" class="btn btn-primary" value="Clear" onclick="myFunction()" style="  margin-left: 159px;
    margin-top: 20px;">
 </div><!-- /.form-group -->
				
				</form>
				
				
			</div>
			
			
           
            <!-- /.box-body -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <!-- table headers -->
					<th>Name</th>
					<th>Email</th>
					<th>Status</th>
					<th>Department</th>
					<th>Occupation</th>
					<th>Mobile</th>
					<th>Actions</th>
				</tr>
				</thead>

				
				<!-- table body -->
				@foreach ($user as $user)
					<tbody>
					<tr>
						<td><a href="/admin/user/{{ $user->id }}">{{ $user->name }}</a></td>
						<td>{{ $user->email }}</td>
						<td>{{ $user->status }}</td>
						<td>{{ $user->department }}</td>
						<td>{{ $user->occupation }}</td>
						<td>{{ $user->number }}</td>
						<td><form class="" action="/admin/user/{{ $user->id }}" method="post">
							<!-- Edit -->
                            <a href="/admin/user/{{ $user->id }}/edit"><i class="fa fa-pencil-square-o fa-fw" aria-hidden="true" style="font-size:20px; color:green" title="edit"></i></a>
							<!-- Delete -->
							<input type="hidden" name="_method" value="delete">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <a onclick="return User_del()">
							<button type="submit" name="name" onclick="return User_del()" style="background:none; padding:0px; border:none"><i class="fa fa-trash-o fa-fw" aria-hidden="true" style="font-size:20px; color:red" title="delete"></i></button></a>  
							</form>
						</td>
					
					</tr>
					</tbody>
	  			@endforeach
				
		      </table>
			</div>
</div>
<script>
    	function User_del() {
			var del = confirm("Do you want to delete this user ?");
		    return del;
		}
		
</script> 
@endsection  











