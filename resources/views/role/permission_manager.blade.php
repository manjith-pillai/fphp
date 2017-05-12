@extends('layouts.admin.template')
@section('content')
<!-- page_title and dscription -->
<?php $page_title = 'Permission Manager' ?>
<?php $page_description = 'Manage Permissions' ?>
<?php $level1 = 'Home' ?>
<?php $divide1 = ' -> ' ?>
<?php $level2 = 'Permission Manager' ?>


<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Manage Permissions</h3>
            <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
            </div>
           </div>
            
            <!-- /.box-header -->
			<form class="form-horizontal" action="/permission_manager/{{$role->id}}" method="post">
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Role</th>
				  <th>Permissions</th>
				  <th>Edit</th>
				  </tr>
				</thead>

			
			<tbody>
            <tr>
			<td>
			{{ $role->display_name }}<br>
			
			</td> 
			<td>
			<?php
			foreach ($permissions as $permission) {
			echo $permission->name;
			echo "<br>";
			}
			?>
			</td>
			<td>
			<?php
				foreach($tests as $key => $value) {
					echo "<input type='checkbox' name='check[{$key}]'".($value == 1 ? "checked" : "")."/><br>";
				}
			?>
			</td>
			</tr>
			</tbody>
			</table>
			<div class="box-footer">
				<input type="hidden" name="_method" value="put">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
				<button onclick="window.location='role'" class="btn btn-default">Cancel</button>
                <input type="submit" name="Submit" class="btn btn-primary" value="Save">
              </div>
			
			</div>
			</form>
		</div>
			
@endsection