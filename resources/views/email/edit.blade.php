@extends('layouts.admin.template')
@section('content')


<!-- page_title and dscription -->
<?php $page_title = 'Email Management' ?>
<?php $page_description = 'Edit Email' ?>
<?php $level1 = 'Home' ?>
<?php $link = '/admin/email' ?>
<?php $divide1 = ' -> ' ?>
<?php $level2 = 'Email Management' ?>
<?php $divide2 = ' -> ' ?>
<?php $level3 = 'Edit Email' ?>


<div class="box box-info">
<form  action="/admin/email/{{ $email->id }}" method="post">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<input type="hidden" name="_method" value="put">
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
                  <input type="email" class="form-control" name="email" value="{{ $email->email }}">
                </div>
                
                 <div class="form-group">
                  <input type="text" class="form-control" name="subject" value="{{ $email->subject }}">
                </div>

                <div>
                  <textarea class="textarea" placeholder="Message" name="message" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ $email->message }}</textarea>
                </div>
              
            </div>
            <div class="box-footer clearfix">
              
             
              <button type="submit" class="pull-right btn btn-default" id="sendEmail">Resend
                <i class="fa fa-arrow-circle-right"></i></button>
            </div>
         </form>
          </div>
		  
@endsection