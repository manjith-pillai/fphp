@extends('layouts.admin.template')
@section('content')

<?php $page_title = 'Role Management' ?>
<?php $page_description = 'Create Role' ?>
<?php $level1 = 'Home' ?>
<?php $link = '/role' ?>
<?php $divide1 = ' -> ' ?>
<?php $level2 = 'Role Management' ?>
<?php $divide2 = ' -> ' ?>
<?php $level3 = 'Create Role' ?>


<!--/.box-header -->
<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Create Role</h3>
				<div class="box-tools pull-right">
					<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
					<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
				</div>
			</div>
			
			
	<!--/.box-body -->
    <form class="form-horizontal" action="/admin/role" method="post">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<div class="box-body">
		
			<!-- Role Name -->
			<div class="form-group">
				<label  class="col-sm-2 control-label">Name <span style="color:red;">*</span> :</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="name" size="10"  placeholder="Role Name">
						{{ ($errors->has('name')) ? $errors->first('name') : '' }}
					</div>
			</div>
	
			<!-- Display name -->
			<div class="form-group">
				<label  class="col-sm-2 control-label">Display Name <span style="color:red;">*</span> :</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="display_name" size="10"  placeholder="Role Display Name">
						{{ ($errors->has('display_name')) ? $errors->first('display_name') : '' }}
					</div>
			</div>
	
			<!-- Description -->
			<div class="form-group">		  
				<label  class="col-sm-2 control-label">Description :</label>
					<div class="col-sm-10">
						<textarea class="form-control" name="description" rows="8" cols="40" size="50" placeholder="this is description"></textarea>
						{{ ($errors->has('description')) ? $errors->first('description') : '' }} 
					</div>
			</div>
		
			<!-- /.box-footer -->
			<div class="box-footer">
                <button onclick="window.location='role'" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-info">create</button>
			</div>
	
		</div>
	</form>
</div>
@endsection	