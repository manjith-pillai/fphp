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
<?php $page_title = 'Demo Management' ?>
<?php $page_description = 'View Demo' ?>
<?php $level1 = 'Home' ?>
<?php $divide1 = ' -> ' ?>
<?php $level2 = 'Demo Management' ?>



<!-- /.box-body -->		   
<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">View Demo</h3>
	     <a href="/admin/demo/create"><i class="fa fa-plus-square-o fa-1g" aria-hidden="true" style="margin-left:50px; font-size:21px" title="create"></i></a>
            <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
            </div>
           </div>
            
            <!-- /.table-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
					<th>Title</th>
					<th>Description</th>
					<th>Owner</th>
					<th>Mobile No</th>
					<th>Gender</th>  
					<th>Demo Category</th>
					<th>Categories Dropdown </th>
					<th>Actions</th>
					  
                </tr>
                </thead>
				
				<!-- /.table-body -->
				@foreach ($demos as $demo)
				 <h2><a href="/demo/{{ $demo->id }}"></a></h2>
                <tbody>
                <tr>
				  <td>{{ $demo->title }}</td>
                  <td>{{ $demo->description }}</td>
                  <td>{{ $demo->owner }}</td>
				  <td>{{ $demo->mob_no }}</td>
				  <td>{{ $demo->radio }}</td>
				  <td>{{ $demo->checked }}</td>
				  <td>{{ $demo->dropdown }}</td>
				   
				  <td> <form class="" action="/admin/demo/{{ $demo->id }}" method="post">
				  
						<!-- Edit Demo -->
                        <a href="/admin/demo/{{ $demo->id }}/edit"><i class="fa fa-pencil-square-o fa-fw" aria-hidden="true" style="font-size:20px; color:green" title="edit"></i></a>
				       
					   
					    <!-- Delete Demo -->
						<input type="hidden" name="_method" value="delete">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<a onclick="return Demo_del()">
						<button type="submit" name="name" onclick="return Demo_del()" style="background:none; padding:0px; border:none"><i class="fa fa-trash-o fa-fw" aria-hidden="true" style="font-size:20px; color:red" title="delete"></i></button></a>  
					
                       </form>
   				  </td>
   
	            </tr>
	            </tbody>
	            @endforeach
	        </table>
         {!! $demos->links() !!}			<!-- Pagination -->
    </div>
</div>
	

  
	
<script>
    function Demo_del() {
		var del = confirm("Are you sure you want to delete this ?");
		return del;
	}
</script> 
 
  
@endsection
  
  
  

