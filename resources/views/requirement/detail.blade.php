@extends('layouts.marketcenter.marketcentertemplate')
@section('content')
<div id="map-property"></div><!-- /.map-property -->

            <div class="container">
                <div class="block-content block-content-small-padding">
                    <div class="block-content-inner">
                        <div class="row">
                            <div class="col-sm-9">
                                <h2 class="property-detail-title">{{ $RMRequirement->projectname }}</h2>
                                <h3 class="property-detail-subtitle">{{ $RMRequirement->city }} <strong>{{ $RMRequirement->price_range  }}</strong></h3>

                                <div class="property-detail-overview">
                                    <div class="property-detail-overview-inner clearfix">
                                        <div class="property-detail-overview-item col-sm-6 col-md-2">
                                            <strong>Price:</strong>
                                            <span>{{ $RMRequirement->price_range   }}</span>
                                        </div><!-- /.property-detail-overview-item -->

                                        <div class="property-detail-overview-item col-sm-6 col-md-2">
                                            <strong>Property Category:</strong>
                                            <span>{{  $RMRequirement->posessionby  }}</span>
                                        </div><!-- /.property-detail-overview-item -->

                                        <div class="property-detail-overview-item col-sm-6 col-md-2">
                                            <strong>Area:</strong>
                                            <span>{{ $RMRequirement->area }}</span>
                                        </div><!-- /.property-detail-overview-item -->

                                        <div class="property-detail-overview-item col-sm-6 col-md-2">
                                            <strong>Membership Club:</strong>
                                            <span>{{ $RMRequirement->no_of_reserved_parkings }}</span>
                                        </div><!-- /.property-detail-overview-item -->

                                        <div class="property-detail-overview-item col-sm-6 col-md-2">
                                            <strong>Booking Amount:</strong>
                                            <span>{{ $RMRequirement->transaction_type }}</span>
                                        </div><!-- /.property-detail-overview-item -->

                                        <div class="property-detail-overview-item col-sm-6 col-md-2">
                                            <strong>Furnishing:</strong>
                                            <span>{{ $RMRequirement->furnishing }}</span>
                                        </div><!-- /.property-detail-overview-item -->
                                    </div><!-- /.property-detail-overview-inner -->
                                </div><!-- /.property-detail-overview -->

                                <div class="flexslider">
                                    <ul class="slides">
<li data-thumb="{{ URL::asset('bower_components/realocation/assets/img/tmp/properties/large/3.jpg') }}">
<img src="{{ URL::asset('bower_components/realocation/assets/img/tmp/properties/large/3.jpg') }}"  alt="">
</li>

                                        <li data-thumb="{{ URL::asset('bower_components/realocation/assets/img/tmp/properties/large/12.jpg') }}">
                                            <img src="{{ URL::asset('bower_components/realocation/assets/img/tmp/properties/large/12.jpg') }}" alt="">
                                        </li>

                                        <li data-thumb="{{ URL::asset('bower_components/realocation/assets/img/tmp/properties/large/5.jpg') }}">
                                            <img src="{{ URL::asset('bower_components/realocation/assets/img/tmp/properties/large/5.jpg') }}" alt="">
                                        </li>

                                        <li data-thumb="{{ URL::asset('bower_components/realocation/assets/img/tmp/properties/large/6.jpg') }}">
                                          <img src="{{ URL::asset('bower_components/realocation/assets/img/tmp/properties/large/6.jpg') }}" alt="">
                                        </li>
                                    </ul><!-- /.slides -->
                                </div><!-- /.flexslider -->

                                <hr>

                                <h2>Electricity Load</h2>

                                <p>
								{{  $RMRequirement->electricity_load }}
                                </p>

                                <hr>

                                <h2>Other Rooms</h2>

                                <div class="row">
                                    <ul class="property-detail-amenities">
									

<li class="col-xs-6 col-sm-4">

<?php
$other_rooms = explode(',',$RMRequirement->other_rooms);
echo (in_array('pooja',$other_rooms)?"<i class='fa fa-check ok'></i>":"<i class='fa fa-ban no'></i>");    
echo "Pooja";
echo "<br>";
?>								
</li>	

<li class="col-xs-6 col-sm-4">

<?php
$other_rooms = explode(',',$RMRequirement->other_rooms);
echo (in_array('study',$other_rooms)?"<i class='fa fa-check ok'></i>":"<i class='fa fa-ban no'></i>");    
echo "Study";
echo "<br>";
?>								
</li>	

<li class="col-xs-6 col-sm-4">

<?php
$other_rooms = explode(',',$RMRequirement->other_rooms);
echo (in_array('servant',$other_rooms)?"<i class='fa fa-check ok'></i>":"<i class='fa fa-ban no'></i>");   
echo "Servant";
echo "<br>";
?>								
</li>	


<li class="col-xs-6 col-sm-4">

<?php
$other_rooms = explode(',',$RMRequirement->other_rooms);
echo (in_array('store',$other_rooms)?"<i class='fa fa-check ok'></i>":"<i class='fa fa-ban no'></i>");   
echo "Store";
echo "<br>";
?>								
</li>	
</ul>
</div><!-- /.row -->
</div>

                            <div class="col-sm-3">
                                <div class="sidebar">
                                    <div class="                    sidebar-inner">
									
                                       @include('layouts.marketcenter.helpers.widgets.social') 
									   @include('layouts.marketcenter.helpers.widgets.enquire')
									   @include('layouts.marketcenter.helpers.widgets.recent-properties')
									   @include('layouts.marketcenter.helpers.widgets.assigned-agents')
                                    </div><!-- /.sidebar-inner -->
                                </div><!-- /.sidebar -->
                            </div>
                        </div><!-- /.row -->
                    </div><!-- /.block-content-inner -->
                </div><!-- /.block-content -->
            </div><!-- /.container -->
@endsection