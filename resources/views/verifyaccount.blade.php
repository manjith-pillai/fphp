@extends('layouts.marketcenter.marketcentertemplate')
@section('content')
<style>

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
	//margin-top:250px;
    top: 100px;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    //background-color: rgb(0,0,0); /* Fallback color */
    ///background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
</style>
<script>
    window.Laravel = <?php echo json_encode([
        'csrfToken' => csrf_token(),
    ]); ?>
</script>
<div class="container">
                    
     <div class="block-content block-content-small-padding">
<div class="block-content-inner">
    <div class="center">
        <h2>Kindly Verify Your Account   !</h2>
    </div><!-- /.center -->     
	<p class="block-slogan center">
        A verification email has been sent to the mentioned email address "abc@gmail.com".             Kindly verify by clicking on the 'Verify' button in the email.                                Go to the gmail.com<br><br>
		Also, Kindly enter the verification code sent to your mobile number +91-534454546.
		<a id="myBtn" href="#"> Change Number</a><br><br>
		<form class="form-group center" action="/verifyaccount" method="post">
		{{ csrf_field() }}
		<input type="textbox" name="otpcode" placeholder="Enter Code Here">                                                         <input type="submit" class="btn btn-inversed btn-primary" value="Verify">
		<a href="#">                                   Resend Code </a><br><br></form>
		If you haven't recieved the verification code,            kindly report it by calling our toll free number 1800-022-345 between Monday to Saturday(9:00a.m to 6:30p.m)         OR send us an email at <a href="#">customercare@abc.com</a>
		</p>
		
		

<!-- The Modal -->
<!--<button id="myBtn">Open Modal</button>-->

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
	
    <p class="center" style="font-size:20px;">Update Your Mobile Number !</p>
	<div class="box">
	<div class="form-group">
	<label for="mobile">Mobile Phone                                                     (User ID)</label>
                                                                                                                                                                                                                <select  name="mob_phone" style="width:150px; height:30px; border:2px solid rgba(0,0,0,0.1);">
      <option value="ind">IND (+91)</option>
  <option value="us">US(+032)</option>
     </select><input type="text" onkeydown="return isNumber(event);" maxlength="10" name="mob_phone" style="width:236px; height:34px; border:2px solid rgba(0,0,0,0.1);" />
	{{ ($errors->has('mob_phone')) ? $errors->first('mob_phone') : '' }}
	
	 
   </div><!-- /.form-group -->
   
  </div>
  <div class="form-group center">
    <input type="submit" value="Update" class="btn btn-inversed btn-primary">
  </div>
</div>
</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
		</div>
	</div>
</div>
@endsection