@extends('layouts.admin.template')

@section('content')

<!-- page_title and dscription -->
<?php $page_title = 'System Configuration' ?>
<?php $page_description = 'Create System Configuration' ?>
<?php $level1 = 'Home' ?>
<?php $link = '/sysconfig' ?>
<?php $divide1 = ' -> ' ?>
<?php $level2 = 'System Configuration' ?>
<?php $divide2 = ' -> ' ?>
<?php $level3 = 'Create System Configuration' ?>


<!-- /.box-header -->
<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Create System Configuration</h3>
              <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
            </div>
           </div>


            <!-- /.box-body -->
            <!-- form start -->
            <form class="form-horizontal" action="/admin/sysconfig" method="post">
				<div class="box-body">
				
					<!-- Configuration name -->
					<div class="form-group">
						<label for="inputname" class="col-sm-2 control-label">Name <span style="color:red;">*</span> :</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="inputname" placeholder="name" name="name" size="30">
								{{ ($errors->has('name')) ? $errors->first('name') : '' }}
							</div>
					</div>
				
					<!-- Configuration Vlaue -->
					<div class="form-group">
						<label for="inputvalue" class="col-sm-2 control-label">Value :</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="inputvalue" placeholder="value" name="value">
								{{ ($errors->has('value')) ? $errors->first('value') : '' }}
							</div>
					</div>
	
					<!--/.box-footer -->
					<div class="box-footer">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<button onclick="window.location='sysconfig'" class="btn btn-default">Cancel</button>
						<button type="submit" class="btn btn-info">create</button>
					</div>
				</div>
			</form>
</div>
@endsection