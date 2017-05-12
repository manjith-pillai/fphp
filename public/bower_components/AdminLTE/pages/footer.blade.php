<div id="footer-wrapper">
        <div id="footer">
            <div id="footer-inner">
                	@include('layouts.marketcenter.helpers.footers.standard')

                <div class="footer-bottom">
                    <div class="container">
                        <p class="center no-margin">
                            &copy; 2017 RealtyMatrix Pvt Ltd; All Right reserved
                        </p>

                        <div class="center">
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-flickr"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-vimeo-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            </ul><!-- /.social -->
                        </div><!-- /.center -->
                    </div><!-- /.container -->
                </div><!-- /.footer-bottom -->
            </div><!-- /#footer-inner -->
        </div><!-- /#footer -->
    </div><!-- /#footer-wrapper -->
	</div><!-- /#wrapper -->
	
	
	
<script type="text/javascript" src="{{ URL::asset('/bower_components/realocation/assets/js/jquery.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('/bower_components/realocation/assets/libraries/isotope/jquery.isotope.min.js') }}"></script>

<!--<script async defer type="text/javascript"  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC807vG1zJMcMwkn_mqBPOVpv5yT5zYYwM&callback=initMap"></script>-->

<!--<script type="text/javascript" src="{{ URL::asset('/bower_components/realocation/assets/js/gmap3.infobox.js') }}"></script>

<script type="text/javascript" src="{{ URL::asset('/bower_components/realocation/assets/js/gmap3.clusterer.js') }}"></script>

<script type="text/javascript" src="{{ URL::asset('/bower_components/realocation/assets/js/map.js') }}"></script>-->

<script type="text/javascript" src="{{ URL::asset('/bower_components/realocation/assets/libraries/bootstrap-sass/vendor/assets/javascripts/bootstrap/transition.js') }}"></script>

<script type="text/javascript" src="{{ URL::asset('/bower_components/realocation/assets/libraries/bootstrap-sass/vendor/assets/javascripts/bootstrap/collapse.js') }}"></script>


<script type="text/javascript" src="{{ URL::asset('/bower_components/realocation/assets/libraries/jquery-bxslider/jquery.bxslider.min.js') }}"></script>

<script type="text/javascript" src="{{ URL::asset('/bower_components/realocation/assets/libraries/flexslider/jquery.flexslider.js') }}"></script>

<script type="text/javascript" src="{{ URL::asset('/bower_components/realocation/assets/js/jquery.chained.min.js') }}"></script>

<script type="text/javascript" src="{{ URL::asset('/bower_components/realocation/assets/js/realocation.js') }}"></script>

<script type="text/javascript" src="{{ URL::asset('/bower_components/realocation/documentation/libraries/bootstrap/js/bootstrap.js') }}"></script>
<script>
 $('.btnNext').click(function(){
  $('.nav-tabs > .active').next('li').find('a').trigger('click');
});

  $('.btnPrevious').click(function(){
  $('.nav-tabs > .active').prev('li').find('a').trigger('click');
});
</script>


</body>
</html>