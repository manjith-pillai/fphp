@extends('layouts.admin.template')

@section('content')

 <div class='row'>
        <div class='col-lg-6 connectedSortable'>
            <!-- Box -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Randomly Generated Tasks</h3>
                    <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                        <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">

                </div><!-- /.box-body -->
                <div class="box-footer">
                    <form action='#'>
                        <input type='text' placeholder='New task' class='form-control input-sm' />
                    </form>
                </div><!-- /.box-footer-->
            </div><!-- /.box -->
        </div><!-- /.col -->
        <div class='col-lg-6 connectedSortable'>
            <!-- Box -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Second Box</h3>
                    <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                        <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    A separate section to add any kind of widget. Feel free
                    to explore all of AdminLTE widgets by visiting the demo page
                    on <a href="https://almsaeedstudio.com">Almsaeed Studio</a>.
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
	</div>
		
		<div class="row">
		<div class="col-lg-6 connectedSortable">
		 <div class="box box-primary">
				<div class = "box-header">
				<h3 class="box-title"><span class="info-box-text">Inventory</span></h3>
				<!-- Info Boxes Style 2 -->
				<div class="info-box bg-yellow">
					<span class="info-box-icon"><i class="ion ion-ios-pricetag-outline"></i></span>

					<div class="info-box-content">
					 
					  <span class="info-box-number">5,200</span>

					  <div class="progress">
						<div class="progress-bar" style="width: 50%"></div>
					  </div>
						  <span class="progress-description">
							50% Increase in 30 Days
						  </span>
					</div>
					<!-- /.info-box-content -->
				  </div>
				</div>
			</div>
		</div>
		

	
	
        
            <!-- Box -->
			<div class="col-lg-6 connectedSortable">
            <div class="box box-primary">
				<div class = "box-header">
				<h3 class="box-title"><span class="info-box-text">Mentions</span></h3>
				  <!-- /.info-box -->
				  <div class="info-box bg-green">
					<span class="info-box-icon"><i class="ion ion-ios-heart-outline"></i></span>

					<div class="info-box-content">
					 
					  <span class="info-box-number">92,050</span>

					  <div class="progress">
						<div class="progress-bar" style="width: 20%"></div>
					  </div>
						  <span class="progress-description">
							20% Increase in 30 Days
						  </span>
					</div>
					<!-- /.info-box-content -->
				  </div>
				</div>
			</div>
		</div>
	
	
        
            <!-- Box -->
			<div class="col-lg-6 connectedSortable">
            <div class="box box-primary">
				<div class = "box-header">
				<h3 class="box-title"><span class="info-box-text">Downloads</span></h3>
	
				  <!-- /.info-box -->
				  <div class="info-box bg-red">
					<span class="info-box-icon"><i class="ion ion-ios-cloud-download-outline"></i></span>

					<div class="info-box-content">
					 
					  <span class="info-box-number">114,381</span>

					  <div class="progress">
						<div class="progress-bar" style="width: 70%"></div>
					  </div>
						  <span class="progress-description">
							70% Increase in 30 Days
						  </span>
					</div>
					<!-- /.info-box-content -->
				  </div>
				</div>
			</div>
		</div>
		
		<div class="col-lg-6 connectedSortable">
            <div class="box box-primary">
				<div class = "box-header">
				<h3 class="box-title"><span class="info-box-text">Direct Messages</span></h3>
					<div class="info-box bg-aqua">
						<span class="info-box-icon"><i class="ion-ios-chatbubble-outline"></i></span>

						<div class="info-box-content">
						  <span class="info-box-number">163,921</span>

						  <div class="progress">
							<div class="progress-bar" style="width: 40%"></div>
						  </div>
							  <span class="progress-description">
								40% Increase in 30 Days
							  </span>
						</div>
					  </div>
					</div>
				</div>
			</div>
	</div>
	


     <div class="row">   
		<div class="col-lg-6 connectedSortable">
 
		<div class="box box-solid bg-green-gradient">
				<div class="box-header">
				  <i class="fa fa-calendar"></i>

				  <h3 class="box-title">Calendar</h3>
				  <!-- tools box -->
				  <div class="pull-right box-tools">
					<!-- button with a dropdown -->
					<div class="btn-group">
					  <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
						<i class="fa fa-bars"></i></button>
					  <ul class="dropdown-menu pull-right" role="menu">
						<li><a href="#">Add new event</a></li>
						<li><a href="#">Clear events</a></li>
						<li class="divider"></li>
						<li><a href="#">View calendar</a></li>
					  </ul>
					</div>
					<button type="button" class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
					</button>
					<button type="button" class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i>
					</button>
				  </div>
				  <!-- /. tools -->
				</div>
				<!-- /.box-header -->
				<div class="box-body no-padding">
				  <!--The calendar -->
				  <div id="calendar" style="width: 100%"></div>
				</div>
				<!-- /.box-body -->
				<div class="box-footer text-black">
				  <div class="row">
					<div class="col-sm-6">
					  <!-- Progress bars -->
					  <div class="clearfix">
						<span class="pull-left">Task #1</span>
						<small class="pull-right">90%</small>
					  </div>
					  <div class="progress xs">
						<div class="progress-bar progress-bar-green" style="width: 90%;"></div>
					  </div>

					  <div class="clearfix">
						<span class="pull-left">Task #2</span>
						<small class="pull-right">70%</small>
					  </div>
					  <div class="progress xs">
						<div class="progress-bar progress-bar-green" style="width: 70%;"></div>
					  </div>
					</div>
					<!-- /.col -->
					<div class="col-sm-6">
					  <div class="clearfix">
						<span class="pull-left">Task #3</span>
						<small class="pull-right">60%</small>
					  </div>
					  <div class="progress xs">
						<div class="progress-bar progress-bar-green" style="width: 60%;"></div>
					  </div>

					  <div class="clearfix">
						<span class="pull-left">Task #4</span>
						<small class="pull-right">40%</small>
					  </div>
					  <div class="progress xs">
						<div class="progress-bar progress-bar-green" style="width: 40%;"></div>
					  </div>
					</div>
					<!-- /.col -->
				  </div>
				  <!-- /.row -->
				</div>
			</div>
		</div>
	
	
	
			
			<div class="col-lg-6 connectedSortable">
			 <div class="box box-primary">
				<div class="box-header with-border">
				<h3 class="box-title"><span class="info-box-text">New Users</span></h3>
				</div>
				 <div class="box-body no-padding">
				<?php
				$users = DB::Select('Select * from users');
				?>
				
					<ul class="users-list clearfix">
					@foreach($users as $user)
                    <li>
                      <img src="/images/{{$user->image}}" alt="User Image">
                      <a class="users-list-name" href="/admin/user/{{$user->id}}">{{ $user->name }}</a>
                      <span class="users-list-date">{{ $user->created_at }}</span>
                    </li>
					@endforeach
                  </ul>
                  <!-- /.users-list -->
				  </div>
                
                <!-- /.box-body -->
                <div class="box-footer text-center">
                  <a href="/admin/user" class="uppercase">View All Users</a>
                </div>
                <!-- /.box-footer -->
              </div>
			  </div>
              <!--/.box -->
            </div>
          



@endsection