<!-- MAP -->
<?php
$query = DB::Select('Select latitude,longitude from property where latitude = 26 AND longitude = 80');
?>
<script type="text/javascript">
      // Note: This example requires that you consent to location sharing when
      // prompted by your browser. If you see the error "The Geolocation service
      // failed.", it means you probably did not give permission for the browser to
      // locate you.
      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 11
        });
        var infoWindow = new google.maps.InfoWindow({map: map});
		
		
        if (navigator.geolocation) {
			@foreach($query as $q) 
			
			 var post = {
				 lat: {{$q->latitude}},
				lng: {{$q->longitude}}
			 };
			
			 var marker1 = new google.maps.Marker({
				position: post,
				map: map,
				title:"Hello World!"
				
			});
		
			@endforeach
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
			var marker = new google.maps.Marker({
				position: pos,
				map: map,
				title:"Hello World!",
				
			});
			var circle = new google.maps.Circle({
				map: map,
				radius: 16093,    // 10 miles in metres
				fillColor: 'transparent',
				editable: true,
				draggable: true,
				strokeColor: 'blue',
				strokeWeight: 1
			});
			circle.bindTo('center', marker, 'position');
            infoWindow.setPosition(pos);
            infoWindow.setContent('Location found.');
            map.setCenter(pos);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
      }

      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
      }
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD968V39rloVvjtthxLcxBEyTUZASz8ook&callback=initMap">
</script>

<div id="map"></div>
	<div class="block-content no-padding">
		<div class="block-content-inner">
			<div class="col-sm-4 col-sm-offset-8 col-md-3 col-md-offset-9 map-navigation-positioning">
				<div class="map-navigation-wrapper">
					<div class="map-navigation">
                        <form method="post" action="/search" class="clearfix">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="form-group col-sm-12">
                                    <label>Buy Sell Or Lease</label>

									<div class="select-wrapper">
                                        <select name="buysell" class="form-control">
                                                <option value="buy">Buy</option>
  <option value="sell">Sell</option>
  <option value="lease">Lease</option>
</select>
	 
	 
	 
	 
	 
	{{ ($errors->has('buysell')) ? $errors->first('buysell') : '' }}
                                        </select>
                                    </div><!-- /.select-wrapper -->
                                </div><!-- /.form-group -->

                                    <div class="form-group col-sm-12">
                                        <label>Property Category</label>

                                        <div class="select-wrapper">
                                            <select name="propcat" class="form-control">
  <option value="res">residential</option>
  <option value="comm">Commercial</option>
  <option value="proj">Projects</option>
</select>
                                        </div><!-- /.select-wrapper -->
                                    </div><!-- /.form-group -->

                                    <div class="form-group col-sm-12">
                                        <label>Locality</label>

                                       <input type="text" class="form-control" name="locality" 
	 placeholder="Locality">
	{{ ($errors->has('locality')) ? $errors->first('locality') : '' }}
                                    </div><!-- /.form-group -->

                                    <div class="form-group col-sm-12">
                                        <label>Ownership</label>

                                        <div class="select-wrapper">
                                            <select name="ownership" class="form-control">
  <option value="freehold">Free Hold</option>
  <option value="leasehold">Lease Hold</option>
   <option value="cooperative_society">Co-Operative Society</option>
    <option value="powerofattorney">Power Of Attorney</option>
  
</select>
                    
	{{ ($errors->has('ownership')) ? $errors->first('ownership') : '' }} 
                                        </div><!-- /.select-wrapper -->
                                    </div><!-- /.form-group -->

                                    <!--<div class="form-group col-sm-6">
                                        <label>Price From</label>
                                        <input type="text"  class="form-control" placeholder="e.g. 1000">
                                    </div><!-- /.form-group -->

                                    <!--<div class="form-group col-sm-6">
                                        <label>Price To</label>
                                        <input type="text"  class="form-control" placeholder="e.g. 5000">
                                    </div><!-- /.form-group -->

                                    <div class="form-group col-sm-12">
                                        <input type="submit" class="btn btn-primary btn-inversed btn-block" value="Filter Properties">
                                    </div><!-- /.form-group -->
                                </form>
                            </div>
						</div>
					</div>
				</div>
			</div>