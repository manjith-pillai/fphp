@extends('layouts.admin.template')
@section('content')
<!-- page_title and dscription -->
<?php $page_title = 'Announcements' ?>
<?php $page_description = 'Edit Announcement' ?>
<?php $level1 = 'Home' ?>
<?php $link = '/document' ?>
<?php $divide1 = ' -> ' ?>
<?php $level2 = 'Announcements' ?>
<?php $divide2 = ' -> ' ?>
<?php $level3 = 'Edit Announcement' ?>

<!-- /.box-header -->
<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Announcement</h3>
              <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
            </div>
           </div>

            
    <!-- /.box-body -->
    <!-- form start -->
    <form class="form-horizontal" action="/admin/messenger/{{ $messenger->id }}" method="post">
		<div class="box-body">
	  
			<!-- Message title -->
			<div class="form-group">
				<label  class="col-sm-2 control-label">Title :                                   <span style="color:red;">*</span></label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="title"   value="{{ $messenger->title }}">
						{{ ($errors->has('title')) ? $errors->first('title') : '' }}
					</div>
			</div>
			
			<!-- Message description -->
			<div class="form-group">		  
				<label  class="col-sm-2 control-label">Description :</label>
					<div class="col-sm-10">
						<textarea class="form-control" name="message">{{ $messenger->message }}</textarea>
						{{ ($errors->has('message')) ? $errors->first('message') : '' }}
					</div>
			</div>
		
			<!-- /.box-footer -->
			<div class="box-footer">
				<input type="hidden" name="_method" value="put">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<button onclick="window.location='messenger'" class="btn btn-default">Cancel</button>
				<input type="submit" name="edit" class="btn btn-primary" value="save">
            </div>
		</div>
	</form>
</div>
		
@endsection