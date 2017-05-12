@extends('layouts.marketcenter.marketcentertemplate')
@section('content')

<div class="container">
<div class="block-content block-content-small-padding">
<div class="block-content-inner">
<h2 class="center">Edit Requirement</h2>
<div class="box">
<form method="post" action="/RMRequirement/{{ $RMRequirement->id }}">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="form-group">
<div id="tabs">
  <ul>
    <li class="tab1 tabclick1" id= "20" >
	<a href="#tabs-1">Basic</a></li>
    <li class="tab1 tabclick1" id= "40" ><a href="#tabs-2" onclick= progressbar(20)>Specifics</a></li>
    <li class="tab1 tabclick1" id= "60" ><a href="#tabs-3">Preferences</a></li>
	
  </ul>
  <div id="tabs-1">
  
  
   <div class="form-group">

     <label>City           <span style="color:red;">*</span></label>
     
      <input type="text" class="form-control" name="city" 
	 value=" {{  $RMRequirement->city  }}" required>
	 
	 
	 
	 
	 
	{{ ($errors->has('city')) ? $errors->first('city') : '' }}
	
		  
</div>


<div class="form-group">

     <label>Project Name           <span style="color:red;">*</span></label>

     
        <input type="text" class="form-control" name="proj_name" 
	 value=" {{  $RMRequirement->projectname  }}" required>
		
		
		
                    
	{{ ($errors->has('proj_name')) ? $errors->first('proj_name') : '' }} 
	 
</div>
 <div class="form-group">

     <label>Posession By</label>
         
		 <select name="posessionby" class="form-control">
		 <option id="">{{  $RMRequirement->posessionby  }}  </option> 
  <option value="ready_to_move">Ready to Move</option>
  <option value="posession_date">Posession Date</option>
  
</select>
		
		
		
                    
	{{ ($errors->has('posessionby')) ? $errors->first('posessionby') : '' }} 
</div>


<div class="form-group">

     <label>Construction Type</label>
         
		 <select name="construction_type" class="form-control">
		  <option id="">{{  $RMRequirement->construction_type  }}  </option>
  <option value="duplex">Duplex</option>
  <option value="multistoried">Multi-Storied</option>
  
</select>
		
		
		
                    
	{{ ($errors->has('construction_type')) ? $errors->first('construction_type') : '' }} 
	
</div>

<div class="form-group">

     <label>No Of Bedrooms</label>
         
		 <select name="no_of_bedrooms" class="form-control">
		 <option id="">{{  $RMRequirement->no_of_bedrooms  }}  </option>
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
		
		
		
                    
	{{ ($errors->has('construction_type')) ? $errors->first('construction_type') : '' }} 
	
</div>

<div class="form-group">

     <label>Locality           <span style="color:red;">*</span></label>

     
        <input type="text" class="form-control" name="locality" 
	 value="{{  $RMRequirement->locality  }}" required>
		
		
		
                    
	{{ ($errors->has('locality')) ? $errors->first('locality') : '' }} 
	 
</div>

<div class="form-group">

     <label>Posted By</label>
         
		 <select name="postedby" class="form-control">
		 <option id="">{{  $RMRequirement->posted_by  }}  </option>
  <option value="broker">Broker</option>
  <option value="builder">Builder</option>
  <option value="owner">Owner</option>
</select>
		
		
		
                    
	{{ ($errors->has('postedby')) ? $errors->first('postedby') : '' }} 
	
</div>

<div class="form-group">

     <label>Possession Date</label>
         
		 <select name="posessiondate" class="form-control">
		 <option id="">{{  $RMRequirement->posession_date  }}  </option>
  <option value="broker">Broker</option>
  <option value="builder">Builder</option>
  <option value="owner">Owner</option>
</select>
		
		
		
                    
	{{ ($errors->has('posessiondate')) ? $errors->first('posessiondate') : '' }} 
	
	 
	 
	 
	 
	
	
		  
</div>

<div class="form-group">

     <label>Price Range</label>
         
		 <select name="pricerange" class="form-control">
		 <option id="">{{  $RMRequirement->price_range  }}  </option>
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
		
		
		
                    
	{{ ($errors->has('pricerange')) ? $errors->first('pricerange') : '' }} 
	</div>

<div class="form-group">

     <label>Area</label>
         
		 <select name="area" class="form-control">
		 <option id="">{{  $RMRequirement->area  }}  </option>
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
	{{ ($errors->has('pricerange')) ? $errors->first('pricerange') : '' }} 
	</div>

</div><!--./ tab-1-->
  
  
  
  <div id="tabs-2">
 


    <div class="form-group">

    <label>Ownership        <span style="color:red;">*</span></label>
     
      <select name="ownership" class="form-control" required>
	  <option id="">{{  $RMRequirement->ownership  }}  </option>
  <option value="freehold">Free Hold</option>
  <option value="leasehold">Lease Hold</option>
  <option value="coperative_society">Co-Operative Society</option>
  <option value="power_of_attorney">Power Of Attorney</option>
  
 
</select>
		 {{ ($errors->has('ownership')) ? $errors->first('ownership') : '' }} 
	
	</div>


<div class="form-group">

    
		  <label># of Toilet/Baths        <span style="color:red;">*</span></label>
     
      <select name="no_of_toilet_baths" class="form-control" required>
	  <option id="">{{  $RMRequirement->no_of_toilet_baths  }}  </option>
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


<div class="form-group">

    
		  <label># of Balconies        <span style="color:red;">*</span></label>
     
      <select name="no_of_balconies" class="form-control" required>
	   <option id="">{{  $RMRequirement->no_of_balconies  }}  </option>
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

  <!--<div class="form-group">

    
		  <label># of Reserved Parkings          <span style="color:red;">*</span></label>
		  
		   <?php
	/*--$no_ofreserved_parkings = explode(',',$RMRequirement->no_of_reserved_parkings);
			   
				
				echo "<input type='checkbox' name='no_of_reserved_parkings[]' id='' value='none'".((in_array('none',$no_ofreserved_parkings))?"checked":'')."/> None<br>";
				
				echo "<input type='checkbox' name='no_of_reserved_parkings[]' id='' value='open'".((in_array('open',$no_ofreserved_parkings))?"checked":'')."/> Open<br>";
                
				echo "<input type='checkbox' name='no_of_reserved_parkings[]'  id='' value='covered'".((in_array('covered',$no_ofreserved_parkings))?"checked":'')."/> Covered<br>";
				*/
				?>
		  
		{{ ($errors->has('no_of_reserved_parkings')) ? $errors->first('no_of_reserved_parkings') : '' }}
</div> -->

<div class="form-group">

    
		  <label>Transaction Type           <span style="color:red;">*</span></label>
       
         <select name="trans_type" class="form-control" required>
		  <option id="">{{  $RMRequirement->transaction_type  }}  </option>
  <option value="newbooking">New booking</option>
  <option value="resale">Re-Sale</option>
   
</select>
	   {{ ($errors->has('trans_type')) ? $errors->first('trans_type') : '' }}
	 
	 
	 
	 
	
	
		  
</div>


<div class="form-group">

    
		  <label>Furnishing           <span style="color:red;">*</span></label>
       
         <select name="furnished" class="form-control" required>
		  <option id="">{{  $RMRequirement->furnishing  }}  </option>
  <option value="semi_furnished">Semi Furnished</option>
  <option value="unfurnished">Unfurnished</option>
   <option value="fullyfurnished">Fully Furnished</option>
</select>
	   {{ ($errors->has('furnished')) ? $errors->first('furnished') : '' }}
	 
	 
	 
	 
	
	
		  
</div>


<div class="form-group">

    
		  <label>Other Rooms          <span style="color:red;">*</span></label><br>
       <?php
				$otherrooms = explode(',',$RMRequirement->other_rooms);
			   
				
				echo "<input type='checkbox' name='other_rooms[]' id='' value='pooja'".((in_array('pooja',$otherrooms))?"checked":'')."/>  Pooja<br>";
				
				echo "<input type='checkbox' name='other_rooms[]' id='' value='study'".((in_array('study',$otherrooms))?"checked":'')."/> Study<br>";
                
				echo "<input type='checkbox' name='other_rooms[]'  id='' value='servant'".((in_array('servant',$otherrooms))?"checked":'')."/> Servant<br>";
				
				echo "<input type='checkbox' name='other_rooms[]'  id='' value='store'".((in_array('store',$otherrooms))?"checked":'')."/> Store<br>";
				
				
				?>
         
	   {{ ($errors->has('other_rooms')) ? $errors->first('other_rooms') : '' }}
	
	 
	 
	 
	 
	
	
		  
</div>


<div class="form-group">

     <label>Facing           <span style="color:red;">*</span></label>
       
         <select name="facing" class="form-control" required>
		 <option id="">{{  $RMRequirement->facing  }}  </option>
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

    <div class="form-group">

     <label>Flooring Type           <span style="color:red;">*</span></label><br>
	   <?php
				$flooringtype = explode(',',$RMRequirement->flooring_type);
			   
				
				echo "<input type='checkbox' name='flooringtype[]' id='' value='vitrified'".((in_array('vitrified',$flooringtype))?"checked":'')."/>  Vitrified<br>";
				
				echo "<input type='checkbox' name='flooringtype[]' id='' value='marble'".((in_array('marble',$flooringtype))?"checked":'')."/> Marble<br>";
                
				echo "<input type='checkbox' name='flooringtype[]'  id='' value='wood'".((in_array('wood',$flooringtype))?"checked":'')."/> Wood<br>";
				
				echo "<input type='checkbox' name='flooringtype[]'  id='' value='ceramic'".((in_array('ceramic',$flooringtype))?"checked":'')."/> Ceramic<br>";
				
				echo "<input type='checkbox' name='flooringtype[]'  id='' value='mosaic'".((in_array('mosaic',$flooringtype))?"checked":'')."/> Mosaic<br>";
				
				echo "<input type='checkbox' name='flooringtype[]'  id='' value='stone'".((in_array('stone',$flooringtype))?"checked":'')."/> Stone<br>";
				
				echo "<input type='checkbox' name='flooringtype[]'  id='' value='ipsfinish'".((in_array('ipsfinish',$flooringtype))?"checked":'')."/> IPS Finish<br>";
				
				echo "<input type='checkbox' name='flooringtype[]'  id='' value='granite'".((in_array('granite',$flooringtype))?"checked":'')."/> Granite<br>";
				
				echo "<input type='checkbox' name='flooringtype[]'  id='' value='spartex'".((in_array('spartex',$flooringtype))?"checked":'')."/> Spartex<br>";
				
				echo "<input type='checkbox' name='flooringtype[]'  id='' value='cement'".((in_array('cement',$flooringtype))?"checked":'')."/> Cement<br>";
				
				echo "<input type='checkbox' name='flooringtype[]'  id='' value='vinyl'".((in_array('vinyl',$flooringtype))?"checked":'')."/>Vinyl<br>
"; 
				
				
				?>
       
         
	   {{ ($errors->has('flooringtype')) ? $errors->first('flooringtype') : '' }}
	
     
</div>
  </div>
  
  
  <div id="tabs-3">
 


    <div class="form-group">

    <label>Project/ Property Position        <span style="color:red;">*</span></label>
     
      <select name="project_property_position" class="form-control" required>
	   <option id="">{{  $RMRequirement->project_property_position  }}  </option>
  <option value="all_side_open">All Side Open</option>
  <option value="Corner_three_side_open">Corner - Three Side Open</option>
  <option value="Corner_center_2_side_open">Corner / Center-Two Side Open</option>
  <option value="1_side_open">One Side Open</option>
  
 
</select>
		 {{ ($errors->has('project_property_position')) ? $errors->first('project_property_position') : '' }} 
	
	</div>
 <div class="form-group">

    <label>OverLooking        <span style="color:red;">*</span></label>
     
      <select name="overlooking" class="form-control" required>
	  <option id="">{{  $RMRequirement->overlooking  }}  </option>
  <option value="park/garden">Park/Garden</option>
  <option value="mainroad">Main Road</option>
  <option value="club_community_center">Club/Community Center</option>
  <option value="swimming_pool">Swimming Pool</option>
  <option value="others">Others</option>
  
 
</select>
		 {{ ($errors->has('overlooking')) ? $errors->first('overlooking') : '' }} 
	
	</div>
  
  <div class="form-group">

    <label>Electricity Load(KW)        <span style="color:red;">*</span></label>
     
      <select name="electricity_load" class="form-control" required>
	  <option id="">{{  $RMRequirement->electricity_load  }}  </option>
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
  
  <div class="form-group">

    <label>Amenities        <span style="color:red;">*</span></label><br>
	<?php
				$amenities = explode(',',$RMRequirement->amenities);
			   
				
				echo "<input type='checkbox' name='amenities[]' id='' value='lifts'".((in_array('lifts',$amenities))?"checked":'')."/>  Lifts<br>";
				
				echo "<input type='checkbox' name='amenities[]' id='' value='parks'".((in_array('parks',$amenities))?"checked":'')."/> Parks<br>";
                
				echo "<input type='checkbox' name='amenities[]'  id='' value='maintenance'".((in_array('maintenance',$amenities))?"checked":'')."/> Maintenance<br>";
				
				echo "<input type='checkbox' name='amenities[]'  id='' value='visitor_parking'".((in_array('visitor_parking',$amenities))?"checked":'')."/> Visitor Parking<br>";
				
				echo "<input type='checkbox' name='amenities[]'  id='' value='water_storage'".((in_array('water_storage',$amenities))?"checked":'')."/> Water Storage<br>";
				
				echo "<input type='checkbox' name='amenities[]'  id='' value='intercom'".((in_array('intercom',$amenities))?"checked":'')."/> Intercom<br>";
				
				echo "<input type='checkbox' name='amenities[]'  id='' value='security_alarm'".((in_array('security_alarm',$amenities))?"checked":'')."/> Security Alarm<br>";
				
				echo "<input type='checkbox' name='amenities[]'  id='' value='piped_gas'".((in_array('piped_gas',$amenities))?"checked":'')."/> Piped Gas<br>";
				
				echo "<input type='checkbox' name='amenities[]'  id='' value='swimming_pool'".((in_array('swimming_pool',$amenities))?"checked":'')."/> Swimming Pool<br>";
				
				echo "<input type='checkbox' name='amenities[]'  id='' value='fitnesscenter'".((in_array('fitnesscenter',$amenities))?"checked":'')."/> Fitness Center<br>";
				
				echo "<input type='checkbox' name='amenities[]'  id='' value='badminton_courts'".((in_array('badminton_courts',$amenities))?"checked":'')."/> Badminton Courts<br>";
				
				echo "<input type='checkbox' name='amenities[]'  id='' value='tennis_courts'".((in_array('tennis_courts',$amenities))?"checked":'')."/> Tennis Courts<br>";
				
				echo "<input type='checkbox' name='amenities[]'  id='' value='tabletennis'".((in_array('tabletennis',$amenities))?"checked":'')."/> Table Tennis<br>";
				
				echo "<input type='checkbox' name='amenities[]'  id='' value='basketball_courts'".((in_array('basketball_courts',$amenities))?"checked":'')."/> BasketBall Courts<br>";
				
				echo "<input type='checkbox' name='amenities[]'  id='' value='pooltable'".((in_array('pooltable',$amenities))?"checked":'')."/> Pool Table<br>";
				
				echo "<input type='checkbox' name='amenities[]'  id='' value='club_communitycenter'".((in_array('club_communitycenter',$amenities))?"checked":'')."/> Club/ Community Center<br>";
				
				echo "<input type='checkbox' name='amenities[]'  id='' value='grocery_center'".((in_array('grocery_center',$amenities))?"checked":'')."/> Grocery Center<br>";
				
				echo "<input type='checkbox' name='amenities[]'  id='' value='shopping_center'".((in_array('shopping_center',$amenities))?"checked":'')."/>Shopping Center<br>";
				
				echo "<input type='checkbox' name='amenities[]'  id='' value='rain_water_harvesting'".((in_array('rain_water_harvesting',$amenities))?"checked":'')."/> Rain Water Harvesting<br>";
				
				echo "<input type='checkbox' name='amenities[]'  id='' value='kids_play_areas'".((in_array('kids_play_areas',$amenities))?"checked":'')."/> Kids Play Areas<br>";
				
				echo "<input type='checkbox' name='amenities[]'  id='' value='kids_day_care'".((in_array('kids_day_care',$amenities))?"checked":'')."/> Kids Day Care<br>";
				
				echo "<input type='checkbox' name='amenities[]'  id='' value='bar'".((in_array('bar',$amenities))?"checked":'')."/> Bar / Lounge<br>";
				
				echo "<input type='checkbox' name='amenities[]'  id='' value='restaurants'".((in_array('restaurants',$amenities))?"checked":'')."/> Restaurants/Eateries<br>";
				
				echo "<input type='checkbox' name='amenities[]'  id='' value='wifi'".((in_array('wifi',$amenities))?"checked":'')."/> Wifi<br>";
				
				echo "<input type='checkbox' name='amenities[]'  id='' value='atms'".((in_array('atms',$amenities))?"checked":'')."/> ATMs<br>";
				?>
     

   
   
   
   
   
   
   
   
		 {{ ($errors->has('amenities')) ? $errors->first('amenities') : '' }} 
	
	</div>
  
  <div class="form-group center">
<input type="hidden" name="_method" value="put">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
				<button onclick="goBack()" class="btn btn-default">Cancel</button>
                <input type="submit" name="name" class="btn btn-inversed btn-primary" value="save">



                                    
              </div>









  </div> <!-- tab-5-->
  
  
 
</div>
</div>
</div>
</div>
 <!-- /.row -->
</form>
</div><!-- /.block-content-inner -->
</div><!-- /.block-content -->
                
   @endsection
  
