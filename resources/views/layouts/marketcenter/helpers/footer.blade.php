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

 function toggle_password(target){
    var d = document;
    var tag = d.getElementById(target);
    var tag2 = d.getElementById("showhide");

    if (tag2.innerHTML == 'Show'){
        tag.setAttribute('type', 'text');   
        tag2.innerHTML = 'Hide';

    } else {
        tag.setAttribute('type', 'password');   
        tag2.innerHTML = 'Show';
    }
}

function isNumber(event) {
  if (event) {
    var charCode = (event.which) ? event.which : event.keyCode;
    if (charCode != 190 && charCode > 31 && 
       (charCode < 48 || charCode > 57) && 
       (charCode < 96 || charCode > 105) && 
       (charCode < 37 || charCode > 40) && 
        charCode != 110 && charCode != 8 && charCode != 46 )
       return false;
  }
  return true;
}

// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

function check() {
    if(document.getElementById('password').value === document.getElementById('confirm_password').value) {
        document.getElementById('message').innerHTML = "match";
		document.getElementById('submit').disabled = false;
    } else {
        document.getElementById('message').innerHTML = "no match";
		document.getElementById('submit').disabled = true;
    }
}

function validatePassword() {

    var newPassword = document.getElementById('pass').value;
	alert(newPassword)
    var minNumberofChars = 6;
    var maxNumberofChars = 15;
    var regularExpression  = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/;
    alert(newPassword); 
    
    if(!regularExpression.test(newPassword)) {
        alert("password should contain atleast one number and one special character");
        return false;
    }
	else{
	alert("done..!!");
	}
}
</script> 





</body>
</html>