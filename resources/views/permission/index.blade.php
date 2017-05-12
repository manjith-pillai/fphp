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
<?php $page_title = 'Permission Management' ?>
<?php $page_description = 'View Permission' ?>
<?php $level1 = 'Home' ?>
<?php $divide1 = ' -> ' ?>
<?php $level2 = 'Permission Management' ?>



<!-- /.box-header -->		   
<div class="box box-primary">
        <div class="box-header with-border">
        <h3 class="box-title">View Permissions</h3>
	    <a href="/admin/permission/create"><i class="fa fa-plus-square-o fa-1g" aria-hidden="true" style="margin-left:50px; font-size:21px" title="create"></i></a>
            <div class="box-tools pull-right">
				<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
				<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
            </div>
        </div>
            
            <!-- /.box-body -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
				<!--table-header -->
                <thead>
                <tr>
					<th>Name</th>
					<th>Display Name</th>
					<th>Description</th>
					<th>Actions</th>
				</tr>
				</thead>
				
				<!-- table-body -->
				@foreach ($permissions as $permission)
				<h2><a href="/permission/{{ $permission->id }}"></a></h2>
                <tbody>
                <tr>
					<td>{{ $permission->name }}</td>
					<td>{{ $permission->display_name }}</td>
					<td>{{ $permission->description }}</td>
					<td> <form class="" action="/admin/permission/{{ $permission->id }}" method="post">
						<!-- Edit -->
						<a href="/admin/permission/{{ $permission->id }}/edit"><i class="fa fa-pencil-square-o fa-fw" aria-hidden="true" style="font-size:20px; color:green" title="edit"></i></a>
				        <!-- Delete -->
						<input type="hidden" name="_method" value="delete">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<a onclick="return Permission_del()">
						<button type="submit" name="name" onclick="return Permission_del()" style="background:none; padding:0px; border:none"><i class="fa fa-trash-o fa-fw" aria-hidden="true" style="font-size:20px; color:red" title="delete"></i></button></a>  
						</form>
					</td>
				</tr>
				</tbody>
				@endforeach
			  </table>
         {!! $permissions->links() !!}
            </div>
</div>
<script>
    function Permission_del() {
		var del = confirm("Are you sure you want to delete this ?");
		return del;
	}
</script> 
@endsection
                  