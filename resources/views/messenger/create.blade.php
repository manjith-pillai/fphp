@extends('layouts.admin.template')

@section('content')

<!-- page_title and dscription -->
<?php $page_title = 'Announcements' ?>
<?php $page_description = 'Create Announcement' ?>
<?php $level1 = 'Home' ?>
<?php $link = '/messenger' ?>
<?php $divide1 = ' -> ' ?>
<?php $level2 = 'Announcements' ?>
<?php $divide2 = ' -> ' ?>
<?php $level3 = 'Create Announcement' ?>


<!-- /.box-header -->
<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Create Announcement</h3>
              <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
            </div>
           </div>


            <!-- /.box-body -->
            <!-- form start -->
            <form class="form-horizontal" action="/admin/messenger" method="post" enctype="multipart/form-data">
				<div class="box-body">
			  
			  <!-- Message title -->
                <div class="form-group">
					<label for="inputtitle" class="col-sm-2 control-label">Title :</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="inputtitle" placeholder="title" name="title" size="30">
							{{ ($errors->has('title')) ? $errors->first('title') : '' }}
						</div>
                </div>
				
				<!-- Message Body -->
				<div class="form-group">		  
                    <label  class="col-sm-2 control-label">Message :</label>
                        <div class="col-sm-10">
							<textarea class="form-control" name="message" rows="8" cols="40" size="50" placeholder="your message here"></textarea>
							{{ ($errors->has('message')) ? $errors->first('message') : '' }} 
						</div>
	            </div>
				
				<!-- /.box-footer -->
				<div class="box-footer">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<button onclick="window.location='messenger'" class="btn btn-default">Cancel</button>
					<button type="submit" class="btn btn-info">create</button>
				</div>
				</div>       
			</form>

</div>
@endsection