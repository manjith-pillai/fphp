@extends('layouts.marketcenter.marketcentertemplate')
@section('content')
@if (session('message'))
    <div class="alert alert-success fade in">
       <a href="" class="close" data-dismiss="alert">&times;</a>
       <strong>Success!</strong> {{ Session::get('message') }}
    </div>
@endif
<!-- get session message -->
<div class="container">
                    <div class="block-content block-content-small-padding">
                        <div class="block-content-inner">
						<h2 class="center">Requirements</h2>
						

      <div class="row">
	@foreach ($RMRequirement as $RMRequirements)
    <div class="property-item property-featured   col-sm-6 col-md-3">
										
    <div class="property-box">
    <div class="property-box-inner">
	
    <h3 class="property-box-title"><a href="/requirement/{{ $RMRequirements->id }}">{{ $RMRequirements->projectname }} </a></h3>
    <h4 class="property-box-subtitle"> {{ $RMRequirements->city }} </h4>
   <div class="property-box-label property-box-label-primary">Requirement</div><!-- /.property-box-label -->
<div class="property-box-picture">
<div class="property-box-price">{{ $RMRequirements->price_range }}</div><!-- /.property-box-price -->
 <div class="property-box-picture-inner">
<a href="#" class="property-box-picture-target">
<img src="{{ URL::asset('bower_components/realocation/assets/img/tmp/agents/medium/1.jpg') }}"  alt=" Image">
</a><!-- /.property-box-picture-target -->
</div><!-- /.property-picture-inner -->
</div><!-- /.property-picture -->
<div class="property-box-meta">
<div class="property-box-meta-item col-sm-3">
 <strong>{{ $RMRequirements->no_of_balconies }}</strong>
<span> # of Balconies</span>
 </div><!-- /.col-sm-3 -->

<div class="property-box-meta-item col-sm-3">
 <strong>{{ $RMRequirements->no_of_reserved_parkings }}</strong>
 <span> # of Reserved Parkings</span>
</div><!-- /.col-sm-3 -->

<div class="property-box-meta-item col-sm-3">
<strong>{{ $RMRequirements->transaction_type }}</strong>
<span>Transaction Type </span>
</div><!-- /.col-sm-3 -->
<div class="property-box-meta-item col-sm-3">
<strong>{{ $RMRequirements->furnishing }}</strong>
<span>Furnishing</span>
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
{!! $RMRequirement->links() !!}
  </ul>
 </div>
</div>
</div><!-- /.row -->
 <!-- /.block-content-inner -->
                    
               
				
  
@endsection
  
  
  


