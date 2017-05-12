@extends('layouts.marketcenter.marketcentertemplate')
@section('content')
<div class="container">
                    <div class="block-content block-content-small-padding">
                        <div class="block-content-inner">
                            <h2 class="center">Company Employees</h2>

                            <p class="block-slogan center">
                                Sed dapibus, ante non pulvinar dictum, dui elit <a href="#">fermentum est</a>, ac auctor sem arcu eget <br> tortor. Praesent odio lectus, dapibus sed sapien in, ullamcorper congue elit. Cras porttitor rhoncus sem ac sollicitudin.
                            </p>

                            <div class="agents-list clearfix">
		
		
                                <div class="row">
								@foreach($agents as $agent)
                                    <div class="col-sm-3">
									
                                        <div class="agent-box">
										
                                            <div class="row">
											
                                                <div class="agent-box-picture col-sm-12">
                                                    <div class="agent-box-label agent-box-label-primary">Elite</div><!-- /.agent-row-picture-label -->

                                                    <div class="agent-box-picture-inner">
                                                        <a href="#" class="agent-box-picture-target">
                                                            <img src="{{ URL::asset('bower_components/realocation/assets/img/tmp/properties/medium/12.jpg') }}" alt="">
                                        </li>
                                                        </a><!-- /.agent-row-picture-target -->
                                                    </div><!-- /.agent-row-picture-inner -->
                                                </div><!-- /.agent-row-picture -->

                                                <div class="agent-box-content col-sm-12">
                                                    <h3 class="agent-box-title"><a href="/agents/{{ $agent->id }}">{{ $agent->name }}</a></h3><!-- /.agent-row-title -->
                                                    <!--<h4 class="agent-box-subtitle"><a href="#"></a></h4><!-- /.agent-row-subtitle -->

                                                    <ul class="social social-boxed">
                                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                    </ul><!-- /.social-->
                                                </div><!-- /.agent-row-content -->
                                            </div><!-- /.row -->
											
                                        </div><!-- /.agent-row -->
										
                                    </div>

                                    

                                     

                                   @endforeach 
                                </div><!-- /.row -->
								
                            </div><!-- /.agents-list -->
							
							</form>
							
							
                        </div><!-- /.block-content-inner -->
                    </div><!-- /.block-content -->
                </div><!-- /.container -->














@endsection