@extends('layouts.admin.template')

@section('content')

<!-- page_title and dscription -->
<?php
$page_title = 'System Configuration';
$page_description = 'Edit System Configuration';
$level1 = 'Home';
$link = '/sysconfig';
$divide1 = ' -> ';
$level2 = 'System Configuration';
$divide2 = ' -> ';
$level3 = 'Edit System Configuration';
?>


<!-- /.box-header -->
<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Configuration</h3>
              <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
            </div>
           </div>


            <!-- /.box-body -->
            <!-- form start -->
            <form class="form-horizontal" action="/admin/sysconfig/{{ $sysconfig->id }}" method="post">
				<div class="box-body">
                  <!-- Update Value -->
					<div class="form-group">
						<label for="inputvalue" class="col-sm-2 control-label">Value :</label>
					
							<div class="col-sm-10">
								<input type="text" class="form-control" id="inputvalue" placeholder="value" name="value" value="{{ $sysconfig->value }}">
								{{ ($errors->has('value')) ? $errors->first('value') : '' }}
							</div>
					</div>
					<!--/.box-footer -->
					<div class="box-footer">
						<input type="hidden" name="_method" value="put">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<button onclick="window.location='sysconfig'" class="btn btn-default">Cancel</button>
						<input type="submit" name="edit" class="btn btn-primary" value="save">
					</div>
			</form>
</div>
@endsection
				