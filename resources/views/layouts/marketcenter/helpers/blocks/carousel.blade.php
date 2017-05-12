<!-- CAROUSEL -->
<div class="block-content background-secondary background-map fullwidth">
<div class="block-content-inner">
<ul class="bxslider clearfix">
<li>
<?php
			$property = DB::table('property')->get();
				 foreach($property as $property)
	      {
		   ?>
<div class="property-box no-border small">
        <div class="property-box-inner">
            <h3 class="property-box-title"><a href="#"><?php echo $property->projectname; ?></a></h3>
		 
            <h4 class="property-box-subtitle"><a href="#"><?php echo $property->locality; ?></a></h4>
			
            <div class="property-box-label property-box-label-primary">Hot Property</div><!-- /.property-box-label -->

            <div class="property-box-picture">
                <div class="property-box-price"><?php echo $property->bestprice; ?></div><!-- /.property-box-price -->
				 
                <div class="property-box-picture-inner">
                    <a href="#" class="property-box-picture-target">
                        <img src="{{ URL::asset('bower_components/realocation/assets/img/tmp/properties/medium/12.jpg') }}" alt="">
                    </a><!-- /.property-box-picture-target -->
                </div><!-- /.property-picture-inner -->
            </div><!-- /.property-picture -->
        </div><!-- /.property-box-inner -->
    </div><!-- /.property-box -->
</li>
<?php } ?>

</ul>
</div><!-- /.block-content-inner -->
</div><!-- /.block-content -->


























