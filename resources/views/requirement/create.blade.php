@extends('layouts.marketcenter.marketcentertemplate')
@section('content')

<div class="container">
<div class="block-content block-content-small-padding">
<div class="block-content-inner">
<h2 class="center">Create Requirement</h2>

<div class="box">
<form method="post" action="/requirement">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">

	<div id="exTab2">	
<ul class="nav nav-tabs">
			<li class="active">
        <a  href="#tab1" data-toggle="tab">Basic</a>
			</li>
			<li><a href="#tab2" data-toggle="tab">Specifics</a>
			</li>
			<li><a href="#tab3" data-toggle="tab">Preferences</a>
			</li>
			<li>@if(!Auth::check())
			<a href="#tab4" data-toggle="tab">Contact Details</a>
			@endif
			</li>
</ul>

			<div class="tab-content">
			  <div class="tab-pane active" id="tab1">
	 <div class="form-group">

     <label>City           <span style="color:red;">*</span></label>
     
      <input type="text" class="form-control" name="city" 
	 placeholder="Suggestion / Auto Population Box" required>
	 
	 
	 
	 
	 
	{{ ($errors->has('city')) ? $errors->first('city') : '' }}
	
		  
</div>


<div class="form-group">

     <label>Project Name           <span style="color:red;">*</span></label>

     
        <input type="text" class="form-control" name="proj_name" 
	 placeholder="Suggestion / Auto Population Box" required>
		
		
		
                    
	{{ ($errors->has('proj_name')) ? $errors->first('proj_name') : '' }} 
	 
</div>
 <div class="form-group">

     <label>Posession By</label>
          <div class="select-wrapper">
         <select class="form-control" name="posessionby">
      <option value="ready_to_move">Ready to Move</option>
  <option value="posession_date">Posession Date</option>
     </select>
     </div>
		 
  
	{{ ($errors->has('posessionby')) ? $errors->first('posessionby') : '' }} 
</div>


<div class="form-group">

     <label>Construction Type</label>
         
		 
		 <div class="select-wrapper">
         <select class="form-control" name="construction_type">
      <option value="duplex">Duplex</option>
  <option value="multistoried">Multi-Storied</option>
     </select>
     </div>
  {{ ($errors->has('construction_type')) ? $errors->first('construction_type') : '' }} 
	
</div>

<div class="form-group">

     <label>No Of Bedrooms</label>
    <div class="select-wrapper">
    <select class="form-control" name="no_of_bedrooms">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
  <option value="11">11</option>
  <option value="12">12</option>
  <option value="13">13</option>
  <option value="14">14</option>
  <option value="15">15</option>
   </select>
     
	 </div>	
		
                    
	{{ ($errors->has('no_of_bedrooms')) ? $errors->first('no_of_bedrooms') : '' }} 
	
</div>

<div class="form-group">

     <label>Locality           <span style="color:red;">*</span></label>

     
        <input type="text" class="form-control" name="locality" 
	 placeholder="Suggestion / Auto Population Box" required>
		
		
		
                    
	{{ ($errors->has('locality')) ? $errors->first('locality') : '' }} 
	 
</div>

<div class="form-group">

     <label>Posted By</label>
	 
	 <div class="select-wrapper">
      <select class="form-control" name="postedby">
      <option value="broker">Broker</option>
  <option value="builder">Builder</option>
  <option value="owner">Owner</option>
     </select>
     </div>
	 
	{{ ($errors->has('postedby')) ? $errors->first('postedby') : '' }} 
	
</div>

<div class="form-group">

     <label>Possession Date</label>
        <div class="select-wrapper">
      <select class="form-control" name="posessiondate">
      <option value="broker">Broker</option>
  <option value="builder">Builder</option>
  <option value="owner">Owner</option>
     </select>
     </div>
		
                    
	{{ ($errors->has('posessiondate')) ? $errors->first('posessiondate') : '' }} 
	
	 </div>

<div class="form-group">

     <label>Price Range</label>
      <div class="select-wrapper">
      <select class="form-control" name="pricerange">
      
  <option value="5-10l">5-10L</option>
  <option value="10-20l">10-20L</option>
  <option value="20-30l">20-30L</option>
  <option value="30-40l">30-40L</option>
  <option value="40-50l">40-50L</option>
  <option value="50-60l">50-60L</option>
  <option value="60-70l">60-70L</option>
  <option value="70-80l">70-80L</option>
  <option value="80-90l">80-90L</option>
  <option value="90-1cr">90-1cr</option>
  <option value="1.00-1.25cr">1.00-1.25cr</option>
 <option value="1.25-1.50cr">1.25-1.50cr</option>
<option value="1.50-1.75cr">1.50-1.75cr</option>
<option value="1.75-2.00cr">1.75-2.00cr</option>
<option value="2.00-2.50cr">2.00-2.50cr</option>
<option value="2.50-3.00cr">2.50-3.00cr</option>
<option value="3.00-3.50cr">3.00-3.50cr</option>
<option value="3.50-4.00cr">3.50-4.00cr</option>
<option value="4.00-4.50cr">4.00-4.50cr</option>
 <option value="4.50-5.00cr">4.50-5.00cr</option>
<option value="5.00-6.00cr">5.00-6.00cr</option>
<option value="6.00-7.00cr">6.00-7.00cr</option>
<option value="7.00-8.00cr">7.00-8.00cr</option>
<option value="8.00-9.00cr">8.00-9.00cr</option>
<option value="9.00-10.00cr">9.00-10.00cr</option>
<option value="10.00-12.50cr">10.00-12.50cr</option>
<option value="12.50-15.00cr">12.50-15.00cr</option>
<option value="15.00-17.50cr">15.00-17.50cr</option>
<option value="17.50-20.00cr">17.50-20.00cr</option>
<option value="20.00-25.00cr">20.00-25.00cr</option>
<option value=">25cr"> >25cr</option>
</select>
     </div>
		
	{{ ($errors->has('pricerange')) ? $errors->first('pricerange') : '' }} 
	</div>

<div class="form-group">

     <label>Area</label>
      <div class="select-wrapper">
      <select class="form-control" name="area">
      <option value="sqft">Sq.Ft.</option>
  <option value="sqyards">Sq.Yards.</option>
  <option value="sqmeter">Sq.Meter</option>
  <option value="acres">Acres</option>
  <option value="marla">Marla</option>
  <option value="cents">Cents</option>
  <option value="bigah">Bigah</option>
  <option value="kottah">Kottah</option>
  <option value="kanal">Kanal</option>
  <option value="hectares">Hectares</option>
  
     </select>
     </div>

{{ ($errors->has('pricerange')) ? $errors->first('pricerange') : '' }} 
	
   </div>
   <a class="btn btn-primary btnNext" >Next</a>
  </div>
  
  <div class="tab-pane" id="tab2">
  <div class="form-group">

    <label>Ownership        <span style="color:red;">*</span></label>
     
	 <div class="select-wrapper">
      <select class="form-control" name="ownership" required>
      <option value="freehold">Free Hold</option>
  <option value="leasehold">Lease Hold</option>
  <option value="coperative_society">Co-Operative Society</option>
  <option value="power_of_attorney">Power Of Attorney</option>
     </select>
     </div>
	 
	 
      
		 {{ ($errors->has('ownership')) ? $errors->first('ownership') : '' }} 
	
	</div>

	
	
	
	
	

<div class="form-group">

    
		  <label># of Toilet/Baths        <span style="color:red;">*</span></label>
     <div class="select-wrapper">
      <select name="no_of_toilet_baths" class="form-control" required>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
 
</select>
		 {{ ($errors->has('no_of_toilet_baths')) ? $errors->first('no_of_toilet_baths') : '' }} 
	
</div>
</div>










  

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
<label># of Reserved Parkings          <span style="color:red;">*</span></label>
		  <div class="select-wrapper">


 <select name="no_of_reserved_parkings" class="form-control" required>
	<option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="7">8</option>
  <option value="7">9</option>
  <option value="7">10</option>
  <option value=">10"> >10</option>
  
</select>	 
</div>
</div>
{{ ($errors->has('no_of_reserved_parkings')) ? $errors->first('no_of_reserved_parkings') : '' }}
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

    
		  <label>Other Rooms          <span style="color:red;">*</span></label><br>
       
         <input type="checkbox" name="other_rooms[]" value="pooja">                   Pooja<br>
		 <input type="checkbox" name="other_rooms[]" value="study" >                 Study<br>
		 <input type="checkbox" name="other_rooms[]" value="servant">                  Servant<br>
		 <input type="checkbox" name="other_rooms[]" value="store" >                    Store<br>
	   {{ ($errors->has('other_rooms')) ? $errors->first('other_rooms') : '' }}
	
	 
	 
	 
	 
	
	
		  
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

     <label>Flooring Type           <span style="color:red;">*</span></label><br>
       
         <input type="checkbox" name="flooringtype[]" value="vitrified" >                                 Vitrified<br>
		 <input type="checkbox" name="flooringtype[]" value="marble" >                                         Marble<br>
		 <input type="checkbox" name="flooringtype[]" value="wood" >                      wood<br>
		 <input type="checkbox" name="flooringtype[]" value="ceramic" >                                    Ceramic<br>
		 <input type="checkbox" name="flooringtype[]" value="mosaic" >                           Mosaic<br>
		 <input type="checkbox" name="flooringtype[]" value="stone" >                                  Stone<br>
		 <input type="checkbox" name="flooringtype[]" value="ipsfinish" >                               IPS Finish<br>
		 <input type="checkbox" name="flooringtype[]" value="granite" >                                     Granite<br>
		 <input type="checkbox" name="flooringtype[]" value="spartex" >                                        Spartex<br>
		 <input type="checkbox" name="flooringtype[]" value="cement" >                                           Cement<br>
		 <input type="checkbox" name="flooringtype[]" value="vinyl" >                                             Vinyl<br>
	   {{ ($errors->has('flooringtype')) ? $errors->first('flooringtype') : '' }}
	
     
</div>
  <a class="btn btn-primary btnNext" >Next</a>
        <a class="btn btn-primary btnPrevious" >Previous</a>
  </div><!-- tab 2-->
  
  <div class="tab-pane" id="tab3">
  <div class="form-group">

    <label>Project/ Property Position        <span style="color:red;">*</span></label>
     <div class="select-wrapper">
      <select name="project_property_position" class="form-control" required>
  <option value="all_side_open">All Side Open</option>
  <option value="Corner_three_side_open">Corner - Three Side Open</option>
  <option value="Corner_center_2_side_open">Corner / Center-Two Side Open</option>
  <option value="1_side_open">One Side Open</option>
  
 
</select>
		 {{ ($errors->has('project_property_position')) ? $errors->first('project_property_position') : '' }} 
	
	</div>
	</div>
 <div class="form-group">

    <label>OverLooking        <span style="color:red;">*</span></label>
     <div class="select-wrapper">
      <select name="overlooking" class="form-control" required>
  <option value="park/garden">Park/Garden</option>
  <option value="mainroad">Main Road</option>
  <option value="club_community_center">Club/Community Center</option>
  <option value="swimming_pool">Swimming Pool</option>
  <option value="others">Others</option>
  
 
</select>
		 {{ ($errors->has('overlooking')) ? $errors->first('overlooking') : '' }} 
	
	</div> 
	</div>
  
  <div class="form-group">

    <label>Electricity Load(KW)        <span style="color:red;">*</span></label>
     <div class="select-wrapper">
      <select name="electricity_load" class="form-control" required>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
  <option value="11">11</option>
  <option value="12">12</option>
  <option value="13">13</option>
  <option value="14">14</option>
  <option value="15">15</option>
  <option value="16">16</option>
  <option value="17">17</option>
  <option value="18">18</option>
  <option value="19">19</option>
  <option value="20">20</option>
  <option value="21">21</option>
  <option value="22">22</option>
  <option value="23">23</option>
  <option value="24">24</option>
  <option value="25">25</option>
 
  
 
</select>
		 {{ ($errors->has('electricity_load')) ? $errors->first('electricity_load') : '' }} 
	
	</div>
	</div>
  
  <div class="form-group">

    <label>Amenities        <span style="color:red;">*</span></label><br>
     
<input type="checkbox" name="amenities[]" value="lifts">                 Lifts<br>
<input type="checkbox" name="amenities[]" value="parks">                  Parks<br>
<input type="checkbox" name="amenities[]" value="maintenance">                       Maintenance<br>
<input type="checkbox" name="amenities[]" value="visitor_parking">          Visitor Parking<br>
<input type="checkbox" name="amenities[]" value="water_storage">             Water Storage<br>
<input type="checkbox" name="amenities[]" value="intercom">                 Intercom<br>
<input type="checkbox" name="amenities[]" value="security_alarm">                     Security Alarms/ Fire Alarms<br>
<input type="checkbox" name="amenities[]" value="piped_gas">                 Piped Gas<br>
<input type="checkbox" name="amenities[]" value="swimming_pool">             Swimming Pool<br>
<input type="checkbox" name="amenities[]" value="fitnesscenter">                     Fitness  Center/ Gym<br>
<input type="checkbox" name="amenities[]" value="badminton_courts">                   Badminton Courts<br>
<input type="checkbox" name="amenities[]" value="tennis_courts">                          Tennis Courts<br>
<input type="checkbox" name="amenities[]" value="basketball_courts">                   BasketBall Courts<br>
<input type="checkbox" name="amenities[]" value="tennis_court">                            Tennis Court<br>
<input type="checkbox" name="amenities[]" value="tabletennis">                       Table Tennis<br>
<input type="checkbox" name="amenities[]" value="pooltable">                 Pool Table<br>
<input type="checkbox" name="amenities[]" value="club_communitycenter">                 Club/ Community Center<br>
<input type="checkbox" name="amenities[]" value="grocery
_center">                         Grocery Center<br>
<input type="checkbox" name="amenities[]" value="shopping_center">                     Shopping Center<br>
<input type="checkbox" name="amenities[]" value="rain_water_harvesting">
                    Rain Water Harvesting<br>
<input type="checkbox" name="amenities[]" value="kids_play_areas">                            Kids Play Areas<br>
<input type="checkbox" name="amenities[]" value="kids_day_care">
                            Kids Day Care/ Cruch<br>
<input type="checkbox" name="amenities[]" value="bar">                   Bar / Lounge<br>
<input type="checkbox" name="amenities[]" value="restaurants">                          Restaurants/ Eateries<br>
   <input type="checkbox" name="amenities[]" value="wifi">                   Wifi<br>
   <input type="checkbox" name="amenities[]" value="atms">                        ATMs<br>
   {{ ($errors->has('amenities')) ? $errors->first('amenities') : '' }} 
  </div>
  <a class="btn btn-primary btnPrevious">Previous</a>
  @if(!Auth::check())
  <a class="btn btn-primary btnNext">Next</a>
@endif

 
 @if(Auth::check())
 
  <div class="form-group center">
 <input type="submit" value="Submit Requirement" class="btn btn-inversed btn-primary">
								
  </div><!-- /.form-group -->
  @endif
  </div><!-- tab 3-->
  
 @if(!Auth::check())
  <div class="tab-pane" id="tab4">
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
    <input type="submit" value="Submit Requirement" class="btn btn-inversed btn-primary">
  </div><!-- /.form-group -->
  
  </div> <!-- tab 4 -->
  
 @endif
</div>
</div>
 <!--<div class="form-group center">
    <input type="submit" value="Submit Requirement" class="btn btn-inversed btn-primary">
  </div>-->
 </form>
</div><!-- /box-->
<!-- /.row -->
</div><!-- /.block-content-inner -->
</div> <!-- container -->
</div>	 
                
   @endsection
  
