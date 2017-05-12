<!-- ISOTOPE GRID -->
<div class="block-content block-content-small-padding">
<div class="block-content-inner">
<h2 class="center">Best Rated Properties</h2>

<ul class="properties-filter">
    <li class="selected"><a href="#" data-filter="*"><span>All</span></a></li>
    <li><a href="#" data-filter=".property-featured"><span>Featured</span></a></li>
    <li><a href="#" data-filter=".property-rent"><span>Rent</span></a></li>
    <li><a href="#" data-filter=".property-sale"><span>Sale</span></a></li>
</ul>
<!-- /.property-filter -->

<?php
//$lat = 28;
//$query=DB::SELECT('select * from users where latitude = ?',[$lat]);
?>

<div class="properties-items">
<div class="row">
				<?php
			$hotproperty = DB::table('property')->where('property_type', 'hot')->get();
				 foreach($hotproperty as $property)
	      {
		   ?>
							<div class="property-item property-featured   col-sm-6 col-md-3">
										
    <div class="property-box">
    <div class="property-box-inner">
	
    <h3 class="property-box-title"><a href="/property/{{ $property->id }}"><?php echo $property->projectname; ?></a></h3>
    <h4 class="property-box-subtitle"><?php echo $property->locality;?></h4>
   <div class="property-box-label property-box-label-primary">Property</div><!-- /.property-box-label -->
<div class="property-box-picture">
<div class="property-box-price"><?php echo $property->bestprice; ?></div><!-- /.property-box-price -->
 <div class="property-box-picture-inner">
<a href="#" class="property-box-picture-target">
<img src="{{ URL::asset('bower_components/realocation/assets/img/tmp/agents/medium/1.jpg') }}"  alt=" Image">
</a><!-- /.property-box-picture-target -->
</div><!-- /.property-picture-inner -->
</div><!-- /.property-picture -->
<div class="property-box-meta">
<div class="property-box-meta-item col-sm-3">
 <strong><?php echo $property->monthly_maintenence; ?></strong>
<span> Maintain</span>
 </div><!-- /.col-sm-3 -->

<div class="property-box-meta-item col-sm-3">
 <strong><?php echo $property->membership_club; ?></strong>
 <span> Club</span>
</div><!-- /.col-sm-3 -->

<div class="property-box-meta-item col-sm-3">
<strong><?php echo $property->amt_dues_payable; ?></strong>
<span>Amount </span>
</div><!-- /.col-sm-3 -->
<div class="property-box-meta-item col-sm-3">
<strong><?php echo $property->bookingamount ;?></strong>
<span>Booking Amount</span>
</div><!-- /.col-sm-3 -->
</div><!-- /.property-box-meta -->

</div><!-- /.property-box-inner -->

</div>
</div><!-- /.property-box -->

	
<?php } ?>
</div><!-- /.row -->
										
	<div class="row">
				<?php
				$rentproperty = DB::table('property')->where('property_type', 'rent')->get();
				 foreach($rentproperty as $property)
	{
		?>
							<div class="property-item property-rent   col-sm-6 col-md-3">
										
    <div class="property-box">
    <div class="property-box-inner">
	
    <h3 class="property-box-title"><a href="/property/{{ $property->id }}"><?php echo $property->projectname; ?></a></h3>
    <h4 class="property-box-subtitle"><?php echo $property->locality;?></h4>
   <div class="property-box-label property-box-label-primary">Property</div><!-- /.property-box-label -->
<div class="property-box-picture">
<div class="property-box-price"><?php echo $property->bestprice; ?></div><!-- /.property-box-price -->
 <div class="property-box-picture-inner">
<a href="#" class="property-box-picture-target">
<img src="{{ URL::asset('bower_components/realocation/assets/img/tmp/agents/medium/1.jpg') }}"  alt=" Image">
</a><!-- /.property-box-picture-target -->
</div><!-- /.property-picture-inner -->
</div><!-- /.property-picture -->
<div class="property-box-meta">
<div class="property-box-meta-item col-sm-3">
 <strong><?php echo $property->monthly_maintenence; ?></strong>
<span> Maintain</span>
 </div><!-- /.col-sm-3 -->

<div class="property-box-meta-item col-sm-3">
 <strong><?php echo $property->membership_club; ?></strong>
 <span> Club</span>
</div><!-- /.col-sm-3 -->

<div class="property-box-meta-item col-sm-3">
<strong><?php echo $property->amt_dues_payable; ?></strong>
<span>Amount </span>
</div><!-- /.col-sm-3 -->
<div class="property-box-meta-item col-sm-3">
<strong><?php echo $property->bookingamount ;?></strong>
<span>Booking Amount</span>
</div><!-- /.col-sm-3 -->
</div><!-- /.property-box-meta -->

</div><!-- /.property-box-inner -->

</div>
</div><!-- /.property-box -->

	
<?php } ?>
</div><!-- /.row -->									
										
										
		<div class="row">
				<?php
				$saleproperty = DB::table('property')->where('property_type', 'sale')->get();
				 foreach($saleproperty as $property)
	{
		?>
							<div class="property-item property-sale   col-sm-6 col-md-3">
										
    <div class="property-box">
    <div class="property-box-inner">
	
    <h3 class="property-box-title"><a href="/property/{{ $property->id }}"><?php echo $property->projectname; ?></a></h3>
    <h4 class="property-box-subtitle"><?php echo $property->locality;?></h4>
   <div class="property-box-label property-box-label-primary">Property</div><!-- /.property-box-label -->
<div class="property-box-picture">
<div class="property-box-price"><?php echo $property->bestprice; ?></div><!-- /.property-box-price -->
 <div class="property-box-picture-inner">
<a href="#" class="property-box-picture-target">
<img src="{{ URL::asset('bower_components/realocation/assets/img/tmp/agents/medium/1.jpg') }}"  alt=" Image">
</a><!-- /.property-box-picture-target -->
</div><!-- /.property-picture-inner -->
</div><!-- /.property-picture -->
<div class="property-box-meta">
<div class="property-box-meta-item col-sm-3">
 <strong><?php echo $property->monthly_maintenence; ?></strong>
<span> Maintain</span>
 </div><!-- /.col-sm-3 -->

<div class="property-box-meta-item col-sm-3">
 <strong><?php echo $property->membership_club; ?></strong>
 <span> Club</span>
</div><!-- /.col-sm-3 -->

<div class="property-box-meta-item col-sm-3">
<strong><?php echo $property->amt_dues_payable; ?></strong>
<span>Amount </span>
</div><!-- /.col-sm-3 -->
<div class="property-box-meta-item col-sm-3">
<strong><?php echo $property->bookingamount ;?></strong>
<span>Booking Amount</span>
</div><!-- /.col-sm-3 -->
</div><!-- /.property-box-meta -->

</div><!-- /.property-box-inner -->

</div>
</div><!-- /.property-box -->

	
<?php } ?>
</div><!-- /.row -->										
</div><!-- /.properties-items -->

</div> <!--/ .content-inner -->
 </div><!-- /.content-small-padding -->	
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					



