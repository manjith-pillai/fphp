@extends('layouts.marketcenter.marketcentertemplate')
@section('content')

<div class="container">
                    <div class="block-content block-content-small-padding">
                        <div class="block-content-inner">
                            <div class="row">
                                <div class="col-sm-4 col-sm-offset-4">
								<h2 class="center">Reset Password</h2>

                                    <div class="box">
										<form id="form-change-password" role="form" method="POST" action="user/credentials" novalidate class="form-horizontal">
										    <div class="form-group">
												<label>Current Password</label>
												<input type="hidden" name="_token" value="{{ csrf_token() }}"> 
												<input type="password" class="form-control" id="current-password" name="current-password" placeholder="Password">
											</div>
											
											<div class="form-group">
												<label>New Password</label>
												<input type="password" class="form-control" id="password" name="password" placeholder="Password">
											</div>
	
											<div class="form-group">
												<label>Re-enter Password</label>
												<input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Re-enter Password">
											</div>
											
											<div class="form-group">
												<button type="submit" class="btn btn-primary btn-inversed btn-block">Submit</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
@endsection