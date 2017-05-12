@extends('layouts.marketcenter.marketcentertemplate')
@section('content')
<div class="container">
                    <div class="block-content block-content-small-padding">
                        <div class="block-content-inner">
                            <div class="row">
                                <div class="col-sm-9">
								
                                    <h2>{{ $agents->fname }} {{ $agents->surname }}</h2>

                                    <div class="agent-detail">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <div class="agent-detail-picture">
                                                   
													<img src="{{ URL::asset('bower_components/realocation/assets/img/tmp/properties/large/12.jpg') }}" alt="" class="img-responsive">
                                                </div><!-- /.agent-detail-picture -->
                                            </div>

                                            <div class="col-sm-8">
                                                <p>
												{{ $agents->brief_profile_desc }}
                                                </p>

                                                <ul class="social social-boxed">
                                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-vimeo-square"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                                </ul><!-- /.social-->
                                            </div>
                                        </div><!-- /.row -->
                                    </div><!-- /.agent-detail -->

                                    <h2>Top projects dealing In</h2>

                                    
                                </div>
								
								<div class="col-sm-3">
                                    <div class="sidebar">
                                        <div class="sidebar-inner">
										@include('layouts.marketcenter.helpers.widgets.contact-form')
										@include('layouts.marketcenter.helpers.widgets.recent-properties')
										
                                            
                                        </div><!-- /.sidebar-inner -->
                                    </div><!-- /.sidebar -->
                                </div>

                            </div><!-- /.row -->
                        </div><!-- /.block-content-inner -->
                    </div><!-- /.block-content -->
                </div><!-- /.container -->
@endsection