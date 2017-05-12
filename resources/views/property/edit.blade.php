@extends('layouts.marketcenter.marketcentertemplate')
@section('content')

<div id="map-property"></div><!-- /.map-property -->

            <div class="container">
                <div class="block-content block-content-small-padding">
                    <div class="block-content-inner">
                        <div class="row">
                            <div class="col-sm-9">
                                <h2 class="property-detail-title">{{ $rm_property->projectname }}</h2>
                                <h3 class="property-detail-subtitle">{{ $rm_property->locality }} <strong>{{ $rm_property->bestprice  }}</strong></h3>

                                <div class="property-detail-overview">
                                    <div class="property-detail-overview-inner clearfix">
                                        <div class="property-detail-overview-item col-sm-6 col-md-2">
                                            <strong>Price:</strong>
                                            <span>{{ $rm_property->bestprice  }}</span>
                                        </div><!-- /.property-detail-overview-item -->

                                        <div class="property-detail-overview-item col-sm-6 col-md-2">
                                            <strong>Property Category:</strong>
                                            <span>{{  $rm_property->propertycategory  }}</span>
                                        </div><!-- /.property-detail-overview-item -->

                                        <div class="property-detail-overview-item col-sm-6 col-md-2">
                                            <strong>Area:</strong>
                                            <span>{{ $rm_property->carpetarea }}</span>
                                        </div><!-- /.property-detail-overview-item -->

                                        <div class="property-detail-overview-item col-sm-6 col-md-2">
                                            <strong>Membership Club:</strong>
                                            <span>{{ $rm_property->membership_club }}</span>
                                        </div><!-- /.property-detail-overview-item -->

                                        <div class="property-detail-overview-item col-sm-6 col-md-2">
                                            <strong>Booking Amount:</strong>
                                            <span>{{ $rm_property->bookingamount }}</span>
                                        </div><!-- /.property-detail-overview-item -->

                                        <div class="property-detail-overview-item col-sm-6 col-md-2">
                                            <strong>Amount Dues:</strong>
                                            <span>{{ $rm_property->amt_dues_payable }}</span>
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

                                <h2>Description</h2>

                                <p>
								{{  $rm_property->others }}
                                </p>

                                <hr>

                                <h2>Amenities</h2>

                                <div class="row">
                                    <ul class="property-detail-amenities">
									

<li class="col-xs-6 col-sm-4">

<?php
$amenities = explode(',',$rm_property->amenities);
echo "<input type='checkbox' name='amenities[]' id='' value='lifts'".((in_array('lifts',$amenities))?"checked":'')."/>  Lifts<br>";
?>								
</li>	

<li class="col-xs-6 col-sm-4">

<?php
$amenities = explode(',',$rm_property->amenities);
echo "<input type='checkbox' name='amenities[]' id='' value='park'".((in_array('park',$amenities))?"checked":'')."/>  Parks<br>";
?>								
</li>	

<li class="col-xs-6 col-sm-4">

<?php
$amenities = explode(',',$rm_property->amenities);
echo "<input type='checkbox' name='amenities[]' id='' value='swimmingpool'".((in_array('swimmingpool',$amenities))?"checked":'')."/>  Swimming Pool<br>";
?>								
</li>	


<li class="col-xs-6 col-sm-4">

<?php
$amenities = explode(',',$rm_property->amenities);
echo "<input type='checkbox' name='amenities[]' id='' value='tabletennis'".((in_array('tabletennis',$amenities))?"checked":'')."/>  Table Tennis<br>";
?>								
</li>	


<li class="col-xs-6 col-sm-4">

<?php
$amenities = explode(',',$rm_property->amenities);
echo "<input type='checkbox' name='amenities[]' id='' value='intercom'".((in_array('intercom',$amenities))?"checked":'')."/>  Intercom<br>";
?>								
</li>	



<li class="col-xs-6 col-sm-4">

<?php
$amenities = explode(',',$rm_property->amenities);
echo "<input type='checkbox' name='amenities[]' id='' value='fitnesscenter'".((in_array('fitnesscenter',$amenities))?"checked":'')."/>  Fitness Center<br>";
?>								
</li>	


<li class="col-xs-6 col-sm-4">

<?php
$amenities = explode(',',$rm_property->amenities);
echo "<input type='checkbox' name='amenities[]' id='' value='security_alarm'".((in_array('security_alarm',$amenities))?"checked":'')."/>  Security Alarm<br>";
?>								
</li>	


<li class="col-xs-6 col-sm-4">

<?php
$amenities = explode(',',$rm_property->amenities);
echo "<input type='checkbox' name='amenities[]' id='' value=''visitor_parking'".((in_array('visitor_parking',$amenities))?"checked":'')."/>  Visitor Parking<br>";
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
  
