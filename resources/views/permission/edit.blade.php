@extends('layouts.admin.template')
@section('content')
<!-- page_title and dscription -->
<?php $page_title = 'Permission Management' ?>
<?php $page_description = 'Edit Permission' ?>
<?php $level1 = 'Home' ?>
<?php $link = '/permission' ?>
<?php $divide1 = ' -> ' ?>
<?php $level2 = 'Permission Management' ?>
<?php $divide2 = ' -> ' ?>
<?php $level3 = 'Edit Permission' ?>

<!-- /.box-header -->
<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Permission</h3>
              <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
            </div>
           </div>

            
    <!-- /.box-body -->
    <!-- form start -->
    <form class="form-horizontal" action="/admin/permission/{{ $permission->id }}" method="post">
		<div class="box-body">
	  
		<!-- Permission Name -->
		<div class="form-group">
			<label  class="col-sm-2 control-label">Name <span style="color:red;">*</span> :</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="name"   value="{{ $permission->name }}">
					{{ ($errors->has('name')) ? $errors->first('name') : '' }}
				</div>
		</div>
	   
	    <!-- Display Name -->
		<div class="form-group">
			<label  class="col-sm-2 control-label">Display Name <span style="color:red;">*</span> :</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="display_name"   value="{{ $permission->display_name }}">
					{{ ($errors->has('display_name')) ? $errors->first('display_name') : '' }}
				</div>
		</div>
	   
		<!-- description -->   
		<div class="form-group">		  
			<label  class="col-sm-2 control-label">Description :</label>
				<div class="col-sm-10">
					<textarea class="form-control" name="description">{{ $permission->description }}</textarea>
					{{ ($errors->has('description')) ? $errors->first('description') : '' }}
				</div>
	    </div>
		</div>
		<!-- /.box-footer -->
        <div class="box-footer">
			<input type="hidden" name="_method" value="put">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button onclick="window.location='permission'" class="btn btn-default">Cancel</button>
            <input type="submit" name="edit" class="btn btn-primary" value="save">
        </div>	
		
	</form>
</div>
	
@endsection	