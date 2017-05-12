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
<?php $page_title = 'Plans' ?>
<?php $page_description = 'View Plans' ?>
<?php $level1 = 'Home' ?>
<?php $divide1 = ' -> ' ?>
<?php $level2 = 'Plans' ?>



<!-- /.box-header -->		   
<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">View Plans</h3>
	     <a href="/admin/plan/create"><i class="fa fa-plus-square-o fa-1g" aria-hidden="true" style="margin-left:50px; font-size:21px" title="create"></i></a>
            <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
            </div>
           </div>
            
            <!-- /.box-body -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
				<!-- table-header -->
                <thead>
                <tr>
                  <th>Name</th>
				  <th>Display Name</th>
                  <th>Description</th>
				  <th>Actions</th>
				</tr>
				</thead>
				
				<!--table-body -->
				@foreach ($plans as $plan)
                <tbody>
                <tr>
					<td>{{ $plan->name }}</td>
					<td>{{ $plan->display_name }}</td>
					<td>{{ $plan->description }}</td>
					<td>	<form class="" action="/admin/plan/{{ $plan->id }}" method="post"> 
						<!-- Edit -->
                        <a href="/admin/plan/{{ $plan->id }}/edit"><i class="fa fa-pencil-square-o fa-fw" aria-hidden="true" style="font-size:20px; color:green" title="edit"></i></a>
				        <!-- Delete -->
						<input type="hidden" name="_method" value="delete">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<a onclick="return plan_del()">
						<button type="submit" name="delete" onclick="return plan_del()" style="background:none; padding:0px; border:none"><i class="fa fa-trash-o fa-fw" aria-hidden="true" style="font-size:20px; color:red" title="delete"></i></button></a>  
						</form>
					</td>
				</tr>
				</tbody>
				@endforeach
			  </table>
         {!! $plans->links() !!}
            </div>
</div>
<script>
    function plan_del() {
		var del = confirm("Are you sure you want to delete this ?");
		return del;
	}
</script> 
@endsection
                  