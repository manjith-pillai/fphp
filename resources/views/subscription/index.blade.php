@extends('layouts.marketcenter.marketcentertemplate')
@section('content')


    <div class="block-content block-content-small-padding">
			<div class="block-content-inner">
				<div class="center">
					<h2>Choose Your Plan</h2>
				<!-- /.center -->
				
						<p class="block-slogan center">
							Subscribe to our plans!!!
						</p>

					<div class="row">
							@foreach($subscriptions as $subscription)
								<div class="pricing-col-wrapper col-sm-3">
									@if(Auth::check())
										@if($subscription->id == 1)
											<div class="pricing-col" style="outline:1px solid blue;">
										@endif
									@else
											<div class="pricing-col">
									@endif
										<div class="pricing-header">
											<h3 class="pricing-title">{{$subscription->display_name}}</h3>
											<h4 class="pricing-subtitle">$ 0</h4>
											<h5 class="pricing-subsubtitle">Forever</h5>
										</div><!-- /.pricing-header -->

										<div class="pricing-content">
											<ul class="list-unstyled">
												<li>1 agent</li>
												<li>10 properties</li>
												<li class="active">statistics</li>
												<li class="active">SSL</li>
												
											</ul>
										</div> 
												
												<div class="pricing-action center">
												@if(Auth::check())
													@if($subscription->id == 1)	
														<input type="submit" name="subscribe" class="btn btn-info" value="Subscribe" disabled>
													@else
														<a href="subscription/{{$subscription->id}}/edit">
														<input type="submit" name="subscribe" class="btn btn-info" value="Subscribe"></a>
													@endif
													
												
												@else
													<a href="/portallogin">
													<input type="submit" name="subscribe" class="btn btn-info" value="Subscribe"></a>
												@endif
												</div>
										</div>
									</div>
								@endforeach
							</div>		
					@if(Auth::check())
						<a href="portallogin" class="skip"><input type="button" name="skip" class="btn btn-info" value="Skip"></a>
					@endif
				</div>
			</div>
		</div>
		
		

@endsection
							
			
								

