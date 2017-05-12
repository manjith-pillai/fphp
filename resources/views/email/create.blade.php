@extends('layouts.admin.template')
@section('content')

<?php $page_title = 'Email Management' ?>
<?php $page_description = 'Create Email' ?>
<?php $level1 = 'Home' ?>
<?php $link = '/admin/email' ?>
<?php $divide1 = ' -> ' ?>
<?php $level2 = 'Email Management' ?>
<?php $divide2 = ' -> ' ?>
<?php $level3 = 'Create Email' ?>



<div class="box box-info">
<form action="/admin/email" method="post">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="box-header">
              <i class="fa fa-envelope"></i>

              <h3 class="box-title">Quick Email</h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            
            <div class="box-body">
              
                <div class="form-group">
                  <input type="email" class="form-control" name="email" placeholder="Email to:">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" placeholder="Subject">
                </div>
                <div>
                  <textarea class="textarea" placeholder="Message" name="message" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                </div>
             
            </div>
            <div class="box-footer clearfix">
              <button type="submit" class="pull-right btn btn-default" >Send
                <i class="fa fa-arrow-circle-right"></i></button>
            </div>
			 </form>
          </div>
		  
@endsection