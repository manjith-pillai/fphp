@extends('layouts.admin.template')

@section('content')

<!-- get session message -->
@if (session('message'))
    <div class="alert alert-success fade in">
       <a href="" class="close" data-dismiss="alert">&times;</a>
       <strong>Success!</strong> {{ Session::get('message') }}
    </div>
@endif

<!-- page_title and dscription -->
<?php $page_title = 'User Management' ?>
<?php $page_description = 'View User' ?>
<?php $level1 = 'Home' ?>
<?php $divide1 = ' -> ' ?>
<?php $level2 = 'User Management' ?>

<!-- /.box-header -->
<div class="box box-primary">
            <div class="box-header with-border">
				<h3 class="box-title">View User</h3>

				
				<!-- Modal Window for Image-MarkUp -->
				<script src="/js/jquery-1.9.1.min.js"></script>
				<script src="/js/paper-core.js"></script>
				<script src="/js/paper-core.min.js"></script>
				<script src="/js/paper-full.js"></script>
				<script src="/js/paper-full.min.js"></script>
				<link href="/css/image-markup.css" rel="stylesheet" />
				<link href="/contextMenu/jquery.contextMenu.css" rel="stylesheet" />
					<div id="myImage" class="modal">
						<div class="modal-content">
							<span class="close">&times;</span>
								<div class="img-container" style="width:200px; margin:50px auto;"><img src="/images/vikas.jpg"/></div>
						</div>
					</div>
				<script src="/js/CommandManager.js"></script>
				<script type="text/javascript" src="/contextMenu/jquery.contextMenu.js"></script>
				<script type="text/javascript" src="/contextMenu/jquery.ui.position.js"></script>
				<script type="text/javascript" src="/js/image-markup.js"></script>
				<script type="text/javascript">
					var markup = $('.img-container img').imageMarkup({ color: 'red', width: 4, opacity: .5 });
				</script>
				<!-- Modal Window for Image Mark-Up ends Here -->
				
				<a href="/admin/user/create"><i class="fa fa-plus-square-o fa-1g" aria-hidden="true" style="margin-left:50px; font-size:21px" title="create"></i></a>
				<a href ="/downloadExcelFile" style="margin-left:20px; font-size:19px;">
					 <i class="fa fa-upload" aria-hidden="true" title="Export"></i></a>
					
					
				

  <!-- Trigger the modal with a button -->
  
 <a href="" data-toggle="modal" 
 data-target="#myModal" style="margin-left:20px; font-size:19px;">
 <i class="fa fa-download" aria-hidden="true" title="Import"></i></a>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <form action="/fileImport" method="post" id="Form" enctype="multipart/form-data">
		  <input type="hidden" name="_token" value="{{ csrf_token() }}">
					<div class="form-group">		  
                    <label  class="col-sm-5 control-label">Choose file TO Upload :</label>
                        <div class="col-sm-7">
							<input type="file" name="file_name">
						</div>
	            </div>
				
				<div class="form-group">
                                               
                <button type="submit" class="btn btn-primary btn-lg"
				style="margin-top:10px;"
				
				>Save</button>
 </div><!-- /.form-group -->
				
					
					</form>
        </div>
        
       
      </div>
      
    </div>
  </div>
  <div class="box-tools pull-right">
					<button type="button" class="btn btn-box-tool" ><i class="fa fa-search" onclick="search()"></i></button>
					<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
				</div>
			</div>
			
			<!-- Search For Html -->
			<div id="searchform" style="display:none;">
				<form action="/admin/search" method="post" id="myForm">
				
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
			   
						<div class="form-group">
							<label for="inputname" class="col-sm-1 control-label">Name   <span style="color:red;">*</span> :</label>
						
								<div class="col-sm-11">
									<input type="text" class="form-control" id="inputname" placeholder="name" name="name" style="width:350px;">
									{{ ($errors->has('name')) ? $errors->first('name') : '' }}
								</div>
						</div><!-- form group -->
						
						<div class="form-group">
							<label for="inputemail" class="col-sm-1 control-label" name="email">Email                     <span style="color:red;">*</span>                          :</label>
					   
								<div class="col-sm-11">
									<input type="email" class="form-control" id="inputemail" placeholder="email" name="email" style="width:350px;">
									{{ ($errors->has('email')) ? $errors->first('email') : '' }}
								</div>
						</div><!-- form-group -->
						
						<div class="form-group">
							<label for="inputnumber" class="col-sm-1 control-label">Mobile<span style="color:red;">*</span>:</label>
						
								<div class="col-sm-11">
									<input type="tel" class="form-control" id="inputnumber" placeholder="number" name="number" style="width:350px;">
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
							<input type="submit" name="search" class="btn btn-primary" value="Search" style="  margin-left: 159px; margin-top: 20px;">
							<input type="button" name="clear" class="btn btn-primary" value="Clear" onclick="myFunction()" style="  margin-left: 159px; margin-top: 20px;">
						</div>
					</form> 
				</div>
			<!-- Search Form Ends Here -->	
			
            <!-- /.box-body -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <!-- table headers -->
					<th>Name</th>
					<th>Email</th>
					<th>Status</th>
					<th>Designation</th>
					<th>Occupation</th>
					<th>Mobile</th>
					<th>Image</th>
					<th>Actions</th>
					<th>Audit</th>
				</tr>
				</thead>
				
				<!-- table body -->
				<?php $count = 0; ?>
				@foreach ($users as $user)
				
				
					<tbody>
					<tr>
						<td><a href="/admin/user/{{ $user->id }}">{{ $user->name }}</a></td>
						<td>{{ $user->email }}</td>
						<td>{{ $user->status }}</td>
						<td>{{ $user->designation }}</td>
						<td>{{ $user->occupation }}</td>
						<td>{{ $user->number }}</td>
						<td><a href="#" onclick="show_image()">{{ $user->image }}</td>
						<td><form class="" action="/admin/user/{{ $user->id }}" method="post">
							<!-- Edit -->
                            <a href="/admin/user/{{ $user->id }}/edit"><i class="fa fa-pencil-square-o fa-fw" aria-hidden="true" style="font-size:20px; color:green;" title="edit"></i></a>
							<!-- Delete -->
							<input type="hidden" name="_method" value="delete">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <a onclick="return User_del()">
							<button type="submit" name="name" onclick="return User_del()" style="background:none; padding:0px; border:none"><i class="fa fa-trash-o fa-fw" aria-hidden="true" style="font-size:20px; color:red;" title="delete"></i></button></a>
							</form>
						</td>
						<td>
							<button onclick="show_model_()" style="background:none; padding:0px; border:none"><i class="fa fa-bars" aria-hidden="true" style="font-size:20px; color:grey;" title="audit"></i></button>			
						</td>
				@endforeach
				{{ $users->links() }}
		      </table>
		</div>
</div>

<!-- Modal Window for Audit Log -->
<div id="myAudit" class="modal modal5">
	<div class="modal-content">
		<span class="close close1">&times;</span>
			<div class="box-body">
				<table id="example1" class="table table-bordered table-hover">
					<thead>
					<tr>
						<th>Id</th>
						<th>User_Id</th>
						<th>Old Value</th>
						<th>New Value</th>
						<th>Created At</th>
					</tr>
					</thead>
					@foreach($audits as $audit)
						<tbody>
						<tr>
							<td>{{ $audit->id }}</td>
							<td>{{ $audit->user_id }}</td>
								@if($audit->old_values != '[]' and $audit->new_values != '[]')
								<?php
									$oldy = str_replace(array('{','}'),' ', $audit->old_values);
									$newly = str_replace(array('{','}'),' ', $audit->old_values);
									$old = explode(",",$oldy);
									$new = explode(",",$newly);
								?>
							<td>
								@foreach($old as $key => $value)
								{{$value}}<br/>
								@endforeach
							</td>
							<td>
								@foreach($new as $key => $value)
									{{$value }}<br/>
								@endforeach
							</td>
								@else
							<td>{{ $audit->old_values }}</td>
							<td>{{ $audit->new_values }}</td>
								@endif
							<td>{{ $audit->created_at }}</td>
						</tr>
						</tbody>
					@endforeach
					{{$audits->links()}}
				</table>
			</div>	
		</div>
	</div>
<!-- Modal window ends here for Audit Log -->
		
<!-- CSS for Audit Log modal -->							
<style>
.modal5 {
    background: #FFFFFF;
    border-radius: 5px;
    box-shadow: 0 0 4px rgba(0, 0, 0, 0.7);
    padding : 10px;
    max-width: 600px;
	max-height: 400px;
	display: none;
    position : absolute;
	margin: auto;
	overflow: auto;
}
</style>
<script>
// Opens Up image for Image Mark-Up //

function show_image() {
	modal.style.display = "block";
}
var modal = document.getElementById('myImage');
var span = document.getElementsByClassName("close")[0];
span.onclick = function() {
    modal.style.display = "none";
}
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

// Opens up Modal Window for Audit Log //

function show_model_() {
	 modal2.style.display = "block";
}
var modal2 = document.getElementById('myAudit');
var span2 = document.getElementsByClassName("close1")[0];
span2.onclick = function() {
    modal2.style.display = "none";
}
window.onclick = function(event) {
    if (event.target == modal2) {
        modal2.style.display = "none";
    }
}
</script>

<script>
// Script to delete particular user
function User_del() {
	var del = confirm("Do you want to delete this user ?");
	return del;
}
</script> 

<script type="text/javascript">
// Script to Check Multiple boxes
 $("#checkAll").change(function () {
	$("input:checkbox").prop('checked', $(this).prop("checked"));
});
</script>
@endsection  
