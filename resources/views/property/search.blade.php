@extends('layouts.marketcenter.marketcentertemplate')
@section('content')
<div class="container">
                    <div class="block-content block-content-small-padding">
                        <div class="block-content-inner">
						<h2 class="center">Properties View</h2>
						
<ul class="properties-filter">
        <li class="selected"><a href="{{ url('/') }}" data-filter="*"><span>All</span></a></li>
        <li><a href="#" data-filter=".property-featured"><span>Featured</span></a></li>
        <li><a href="#" data-filter=".property-rent"><span>Rent</span></a></li>
        <li><a href="#" data-filter=".property-sale"><span>Sale</span></a></li>
    </ul>
                                    <div class="row">
									
									 
									@foreach ($property as $searchproperty)
                                        <div class="property-item property-featured   col-sm-6 col-md-3">
										
    <div class="property-box">
    <div class="property-box-inner">
    <h3 class="property-box-title"><a href="/property/{{ $searchproperty->id }}">{{ $searchproperty->projectname }}</a></h3>
    <h4 class="property-box-subtitle">{{ $searchproperty->locality }}</h4>
   <div class="property-box-label property-box-label-primary">Property</div><!-- /.property-box-label -->
<div class="property-box-picture">
<div class="property-box-price">{{ $searchproperty->bestprice }}</div><!-- /.property-box-price -->
 <div class="property-box-picture-inner">
<a href="#" class="property-box-picture-target">
<img src="{{ URL::asset('bower_components/realocation/assets/img/tmp/agents/medium/1.jpg') }}"  alt=" Image">
</a><!-- /.property-box-picture-target -->
</div><!-- /.property-picture-inner -->
</div><!-- /.property-picture -->
<div class="property-box-meta">
<div class="property-box-meta-item col-sm-3">
 <strong>{{ $searchproperty->monthly_maintenence }}</strong>
<span> Maintain</span>
 </div><!-- /.col-sm-3 -->

<div class="property-box-meta-item col-sm-3">
 <strong>{{ $searchproperty->membership_club }}</strong>
 <span> Club</span>
</div><!-- /.col-sm-3 -->

<div class="property-box-meta-item col-sm-3">
<strong>{{ $searchproperty->amt_dues_payable }}</strong>
<span>Amount </span>
</div><!-- /.col-sm-3 -->
<div class="property-box-meta-item col-sm-3">
<strong>{{ $searchproperty->bookingamount }}</strong>
<span>Booking Amount</span>
</div><!-- /.col-sm-3 -->
</div><!-- /.property-box-meta -->

</div><!-- /.property-box-inner -->
</div>
</div><!-- /.property-box -->

@endforeach

                                        </div><!-- /.property-item -->

                                      
                                    </div><!-- /.row -->

                                    <div class="center">
                                        <ul class="pagination">
                                           
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- /.row -->
                        <!-- /.block-content-inner -->
                    
               
				
  
@endsection























