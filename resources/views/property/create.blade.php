@extends('layouts.marketcenter.marketcentertemplate')
@section('content')


<div class="container">
<div class="block-content block-content-small-padding">
<div class="block-content-inner">
<h2 class="center">Create Property</h2>
<form method="post" action="/property">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="box">

	<div id="exTab2">	
<ul class="nav nav-tabs">
			<li class="active">
        <a  href="#tab1" data-toggle="tab">Basic</a>
			</li>
			<li><a href="#tab2" data-toggle="tab">Details</a>
			</li>
			<li><a href="#tab3" data-toggle="tab">Specifics</a>
			</li>
			<li><a href="#tab4" data-toggle="tab">Features</a>
			</li>
			<li><a href="#tab5" data-toggle="tab">Pricing</a>
			</li>
			<li>@if(!Auth::check())
			<a href="#tab6" data-toggle="tab">Contact </a>
		     @endif
			</li> 
		</ul>

			<div class="tab-content">
			  <div class="tab-pane active" id="tab1">
          <div class="form-group">

     <label>Buy Sell Or Lease           <span style="color:red;">*</span></label>
     <div class="select-wrapper">
      <select name="buysell" class="form-control" required>
  <option value="buy">Buy</option>
  <option value="sell">Sell</option>
  <option value="lease">Lease</option>
</select>
	 
	 
	 
	 
	 
	{{ ($errors->has('buysell')) ? $errors->first('buysell') : '' }}
	
		  
</div>
</div>

<div class="form-group">

     <label>Property Category           <span style="color:red;">*</span></label>
<div class="select-wrapper">
     
      <select name="propcat" class="form-control" required>
  <option value="res">residential</option>
  <option value="comm">Commercial</option>
  <option value="proj">Projects</option>
</select>
		
		
		
                    
	{{ ($errors->has('propcat')) ? $errors->first('propcat') : '' }} 
	
</div>
</div>

<div class="form-group">

     <label>Posted By</label>
         <div class="select-wrapper">
		 <select name="postedby" class="form-control">
  <option value="broker">Broker</option>
  <option value="builder">Builder</option>
  <option value="owner">Owner</option>
</select>
		
		
		
                    
	{{ ($errors->has('postedby')) ? $errors->first('postedby') : '' }} 
	
</div>
</div>
 <a class="btn btn-primary btnNext" >Next</a>
</div><!-- tab- 1a-->


				<div class="tab-pane" id="tab2">
          <div class="form-group">
  <label> Project Name           <span style="color:red;">*</span></label>
    
     <input type="text" class="form-control" name="projname" 
	 placeholder="Project Name" required>
	 {{ ($errors->has('projname')) ? $errors->first('projname') : '' }}
	</div>
	
	<div class="form-group">
     <label> Locality          <span style="color:red;">*</span></label>
     <input type="text" class="form-control" name="locality" 
	 placeholder="Locality" required>
	{{ ($errors->has('locality')) ? $errors->first('locality') : '' }}
	</div>

	
	<div class="form-group">
   <label> City          <span style="color:red;">*</span></label>
    <input type="text" class="form-control" name="city" 
	 placeholder="City" required>
	{{ ($errors->has('city')) ? $errors->first('city') : '' }}
	</div>
	
	<div class="form-group">
<label>Posession By        <span style="color:red;">*</span></label>
<div class="select-wrapper">
  <select name="posessionby" class="form-control" required>
  <option value="readytomove">Ready To Move</option>
  <option value="posessiondate">Posession Date</option>
 
</select>
		 {{ ($errors->has('posessionby')) ? $errors->first('posessionby') : '' }} 
	</div>
	</div>
	<div class="form-group">
<label>Completion Status</label>
<div class="select-wrapper">
  <select name="comp_status" class="form-control">
  <option value="pending">Pending</option>
  <option value="completed">Completed</option>
  
</select>
                    
	{{ ($errors->has('comp_status')) ? $errors->first('comp_status') : '' }} 
	
</div>
	</div>
	<div class="form-group">
<label>Ownership</label>
       <div class="select-wrapper">  
		<select name="ownership" class="form-control">
  <option value="freehold">Free Hold</option>
  <option value="leasehold">Lease Hold</option>
   <option value="cooperative_society">Co-Operative Society</option>
    <option value="powerofattorney">Power Of Attorney</option>
  
</select>
                    
	{{ ($errors->has('ownership')) ? $errors->first('ownership') : '' }} 
	 
</div>
</div>

<a class="btn btn-primary btnNext" >Next</a>
        <a class="btn btn-primary btnPrevious" >Previous</a>

				</div>
        <div class="tab-pane" id="tab3">
          <div class="form-group">

    
		  <label># of Balconies          <span style="color:red;">*</span></label>
    <div class="select-wrapper">
     <select name="no_of_balconies" class="form-control" required>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  
</select>
	{{ ($errors->has('no_of_balconies')) ? $errors->first('no_of_balconies') : '' }}
	 
	 
</div>
</div>
<div class="form-group">

    
		  <label>Transaction Type           <span style="color:red;">*</span></label>
       <div class="select-wrapper">
         <select name="trans_type" class="form-control" required>
  <option value="newbooking">New booking</option>
  <option value="resale">Re-Sale</option>
   
</select>
	   {{ ($errors->has('trans_type')) ? $errors->first('trans_type') : '' }}
	 
</div>
</div>

<div class="form-group">

    
		  <label>Furnishing           <span style="color:red;">*</span></label>
       <div class="select-wrapper">
         <select name="furnished" class="form-control" required>
  <option value="semi_furnished">Semi Furnished</option>
  <option value="unfurnished">Unfurnished</option>
   <option value="fullyfurnished">Fully Furnished</option>
</select>
	   {{ ($errors->has('furnished')) ? $errors->first('furnished') : '' }}
	 
	</div>
</div>

<div class="form-group">

    
		  <label>Carpet Area           <span style="color:red;">*</span></label>
       
         <input type="text" class="form-control" name="carpetarea" 
	 placeholder="Carpet Area" required>
	   {{ ($errors->has('carpetarea')) ? $errors->first('carpetarea') : '' }}
	
	</div>


<div class="form-group">

     <label>Facing           <span style="color:red;">*</span></label>
       <div class="select-wrapper">
         <select name="facing" class="form-control" required>
  <option value="south">South</option>
  <option value="north">North</option>
   <option value="east">East</option>
   <option value="west">West</option>
   <option value="southeast">South East</option>
   <option value="southwest">South West</option>
   <option value="northeast">North East</option>
    <option value="northwest">North West</option>
</select>
	   {{ ($errors->has('facing')) ? $errors->first('facing') : '' }}
	
     
	 </div>
</div>
<div class="form-group">

     <label>Flooring Type           <span style="color:red;">*</span></label>
       <div class="select-wrapper">
         <select name="flooringtype" class="form-control">
  <option value="yes">Yes</option>
  <option value="no">No</option>
   
</select>
	   {{ ($errors->has('flooringtype')) ? $errors->first('flooringtype') : '' }}
	
     </div>
	 
	 
</div>
  <a class="btn btn-primary btnNext" >Next</a>
        <a class="btn btn-primary btnPrevious" >Previous</a>
  </div> <!-- tab-3 --->
  
  <div class="tab-pane" id="tab4">
  <div class="form-group">

     <label>Length Unit          <span style="color:red;">*</span></label>
    <div class="select-wrapper">
     <select name="lengthunit" class="form-control" required>
  <option value="1">Meter</option>
  <option value="2">Feet</option>
  
  
</select>
	{{ ($errors->has('lengthunit')) ? $errors->first('lengthunit') : '' }}
	
   </div>  
</div>

<div class="form-group">

     <label>Project Property Position	 <span style="color:red;">*</span></label>
       <div class="select-wrapper">
         <select name="proj_prop_position" class="form-control" required>
  <option value="1">All Side Open</option>
  <option value="2">Corner - Three Side</option>
   <option value="3">Corner-Two Side</option>
   <option value="4">One Side Open</option>
</select>
	   {{ ($errors->has('proj_prop_position')) ? $errors->first('proj_prop_position') : '' }}
	
     
</div>
  </div>

<div class="form-group">

     <label>Electricity Load(KW)           <span style="color:red;">*</span></label>
      <div class="select-wrapper">
         <select name="electricity_load" class="form-control" required>
  <option value="1">1-5</option>
  <option value="2">5-10</option>
   <option value="3">10-15</option>
   <option value="4">15-20</option>
   <option value="5">20-25</option>
</select>
	   {{ ($errors->has('electricity_load')) ? $errors->first('electricity_load') : '' }}
	
     
</div>
</div>

<div class="form-group">

     <label>Overlooking           <span style="color:red;">*</span></label>
       <div class="select-wrapper">
         <select name="overlooking" class="form-control" required>
  <option value="park">Park/Garden</option>
  <option value="mainroad">Main Road</option>
   <option value="club">Club/ Community Center</option>
   <option value="swimming">Swimming Pool</option>
   <option value="others">Others</option>
   
</select>
	   {{ ($errors->has('overlooking')) ? $errors->first('overlooking') : '' }}
	
    
</div>
</div>

<div class="form-group">

     <label>Others          <span style="color:red;">*</span></label>
       
         <input type="text" class="form-control" name="others" 
	 placeholder="Others" required>
	   {{ ($errors->has('others')) ? $errors->first('others') : '' }}
	
     
</div>


<div class="form-group">

     <label>Amenities           <span style="color:red;">*</span></label><br>
       
         <input type="checkbox" name="amenities[]" value="lifts">               Lifts<br>
<input type="checkbox" name="amenities[]" value="park">               Parks <br>
<input type="checkbox" name="amenities[]" value="swimmingpool">     Swimming Pool <br>
<input type="checkbox" name="amenities[]" value="tabletennis">        Table Tennis <br>
<input type="checkbox" name="amenities[]" value="intercom">     Intercom <br>
<input type="checkbox" name="amenities[]" value="fitnesscenter">    Fitness Center<br>
<input type="checkbox" name="amenities[]" value="security_alarm">   Security Alarm<br>
<input type="checkbox" name="amenities[]" value="visitor_parking">   Visitor Parkings<br>
	   {{ ($errors->has('amenities')) ? $errors->first('amenities') : '' }}
	
     </div>
  <a class="btn btn-primary btnNext" >Next</a>
        <a class="btn btn-primary btnPrevious" >Previous</a>
  </div><!-- tab 4-->
  
  <div class="tab-pane" id="tab5">
  
  <div class="form-group">

     <label>Monthly Maintenence          <span style="color:red;">*</span></label>
     
    <input type="text" class="form-control" name="monthly_maintenence" required>
	{{ ($errors->has('monthly_maintenence')) ? $errors->first('monthly_maintenence') : '' }}
	
     
</div>

<div class="form-group">

     <label>Any Membership Club	 <span style="color:red;">*</span></label>
       
      <input type="text" class="form-control" name="any_membership_club" required>
	   {{ ($errors->has('any_membership_club')) ? $errors->first('any_membership_club') : '' }}
	
     
</div>

<div class="form-group">

     <label>Amount Dues Payable          <span style="color:red;">*</span></label>
       
          <input type="text" class="form-control" name="amt_dues_pay" required>
	   {{ ($errors->has('amt_dues_pay')) ? $errors->first('amt_dues_pay') : '' }}
	
     
</div>


<div class="form-group">

     <label>Booking Amount          <span style="color:red;">*</span></label>
       
       <input type="text" class="form-control" name="booking_amt" required>
	   {{ ($errors->has('booking_amt')) ? $errors->first('booking_amt') : '' }}
	
     
</div>

<div class="form-group">

     <label>Best Price          <span style="color:red;">*</span></label>
       
         <input type="text" class="form-control" name="bestprice" required>
	   {{ ($errors->has('bestprice')) ? $errors->first('bestprice') : '' }}
	
     
</div>

<div class="form-group">

     <label>Location PLC           <span style="color:red;">*</span></label>
      
         <input type="text" class="form-control" name="loc_plc" required>
	   {{ ($errors->has('loc_plc')) ? $errors->first('loc_plc') : '' }}
	
     
</div>

<a class="btn btn-primary btnPrevious">Previous</a>
  @if(!Auth::check())
  <a class="btn btn-primary btnNext">Next</a>
@endif

 
 @if(Auth::check())
 
  <div class="form-group center">
 <input type="submit" value="Submit Property" class="btn btn-inversed btn-primary">
								
  </div><!-- /.form-group -->
  @endif
  
 </div> <!-- tab 5-->
 
 
 @if(!Auth::check())
  <div class="tab-pane" id="tab6">
	 <div class="form-group">

     <label>First Name           <span style="color:red;">*</span></label>
     
      <input type="text" class="form-control" name="fname" required>
	 {{ ($errors->has('fname')) ? $errors->first('fname') : '' }}
	
		  
</div>

<div class="form-group">

     <label>Mobile Number           <span style="color:red;">*</span></label>
     
      <input type="number" class="form-control" name="mobno" required>
	 {{ ($errors->has('mobno')) ? $errors->first('mobno') : '' }}
	
		  
</div>
  
  <div class="form-group">

     <label>Email Address          <span style="color:red;">*</span></label>
     
      <input type="email" class="form-control" name="email" required>
	 {{ ($errors->has('email')) ? $errors->first('email') : '' }}
	
		  
</div>
<a class="btn btn-primary btnPrevious" >Previous</a>

  <div class="form-group center">
    <input type="submit" value="Submit Property" class="btn btn-inversed btn-primary">
  </div><!-- /.form-group -->
  
  </div> <!-- tab 6 -->
  
 @endif
 </form>

                    </div><!-- /.block-content-inner -->
                </div><!-- /.block-content -->
			</div>
		</div>
	</div>
</div>
@endsection

  
