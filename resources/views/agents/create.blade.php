@extends('layouts.marketcenter.marketcentertemplate')
@section('content')

  <div class="container">
 <div class="block-content block-content-small-padding">
 <div class="block-content-inner">
 <div class="row">
 <h2 class="center">AGENT'S REGISTRATION</h2>
<form method="post" action="/agents">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="box">
<div class="col-sm-12">
<div class="col-sm-4">
  

 <div class="form-group">
  <label>E-mail(User ID)          <span style="color:red;">*</span></label>
  <input type="text" name="email" class="form-control" required>
 {{ ($errors->has('email')) ? $errors->first('email') : '' }}
  </div><!-- /.form-group -->
  
  <div class="form-group">
   <label>Mobile Phone</label><br>
  
         <select  name="mob_phone" style="width:100px; height:23px; border:2px solid rgba(0,0,0,0.1);">
      <option value="ind">ind (+91)</option>
  <option value="us">us(+032)</option>
     </select>
	 <input type="text" onkeydown="return isNumber(event);" maxlength="10" name="mob_phone"style="width:230px; height:34px; border:2px solid rgba(0,0,0,0.1);"  />
	{{ ($errors->has('mob_phone')) ? $errors->first('mob_phone') : '' }}
	
	 
   </div><!-- /.form-group -->
									
  <div class="form-group">
   <label>Name                                             <span style="color:red;">*</span></label>
  <input type="text" name="name" class="form-control" required>
  {{ ($errors->has('name')) ? $errors->first('name') : '' }}
   </div><!-- /.form-group -->
									
	<div class="form-group">
   <label>Residing City                                             <span style="color:red;">*</span></label>
  <div class="select-wrapper">
  <select multiple class="form-control" name="residing_city"  required>
  <option value="faridabad">Faridabad</option>
  <option value="ghaziabad">Ghaziabad</option>
  <option value="noida">Noida</option>
 
  
</select>
</div>
  </div><!-- /.form-group -->
	{{ ($errors->has('residing_city')) ? $errors->first('residing_city') : '' }}
	
	<div class="form-group">
    <label>Password</label>
    <input type="password"  name="password" id="pwd0" class="form-control" />
   <a href="#" onclick="toggle_password('pwd0');" id="showhide">Show</a>
   </div><!-- /.form-group -->
   
   <div class="form-group">
   <label>Confirm Password</label>
   <input type="password" class="form-control" name="password_confirmation" id="confirm_password" onchange="check()"/>
   <span id='message'></span><br>
    </div><!-- /.form-group -->
								
     <input type="checkbox">                    Receive Marketing Flyers & Relevant Info<br>
	  <input type="checkbox">                   I agree to the<a href="#"> Terms & Conditions</a>




	</div> <!-- /col-sm-4 -->
									
<div class="col-sm-4">
	<div class="form-group">
      <label>Address Postal Code                               <span style="color:red;">*</span></label>
     <input type="text" name="address_postal_code" class="form-control" required>
	{{ ($errors->has('address_postal_code')) ? $errors->first('address_postal_code') : '' }}
     </div><!-- /.form-group -->

  <div class="form-group">
  <label>Street Address                                                            <span style="color:red;">*</span></label>
 <input type="text" name="street_address" class="form-control" required>
	{{ ($errors->has('street_address')) ? $errors->first('street_address') : '' }}
  </div><!-- /.form-group -->
									
  <div class="form-group">
  <label>Specialization                                                   <span style="color:red;">*</span></label>
  <div class="select-wrapper">
  <select multiple class="form-control" name="specialization" required>
  <option value="buy">Buy</option>
  <option value="sell">Sell</option>
  <option value="lease">Lease</option>
  <option value="counsel">Counsel</option>
</select>
 
</div>
  </div><!-- /.form-group -->
  {{ ($errors->has('specialization')) ? $errors->first('specialization') : '' }}
									
<div class="form-group">
 <label>Primary Product Categories                                 <span style="color:red;">*</span></label>
 <div class="select-wrapper">
  <select multiple class="form-control" name="primary_prod_cat"  required>
  <option value="residential">Residential</option>
  <option value="plot">Plot</option>
  <option value="flat">Flat</option>
  <option value="commercial">Commercial</option>
   <option value="retail">Retail</option>
  
</select>
  {{ ($errors->has('primary_prod_cat')) ? $errors->first('primary_prod_cat') : '' }}
  </div>
  </div><!-- /.form-group -->
									
 <div class="form-group">
    <label>Years Of Reality Experience                                       <span style="color:red;">*</span></label>
 <input type="text" class="form-control" name="years_relaty_exp" required>
{{ ($errors->has('years_relaty_exp')) ? $errors->first('years_relaty_exp') : '' }}
 </div><!-- /.form-group -->
									
	
									
	</div> <!--/.col-sm-4-->
									
 <div class="col-sm-4">
<div class="form-group">
<label>Educational Qualification                                       <span style="color:red;">*</span></label>
<div class="select-wrapper">
<select class="form-control" name="edu_qualification" required>
  <option value="ug">Under Graduate</option>
  <option value="graduate">Graduate</option>
  <option value="pg">Post Graduate</option>
  <option value="masters">Masters</option>
</select>
{{ ($errors->has('edu_qualification')) ? $errors->first('edu_qualification') : '' }}
</div>
 </div><!-- /.form-group -->

 <div class="form-group">
 <label>Educational Specialization                                            <span style="color:red;">*</span></label>
  
  <div class="select-wrapper">
  <select name="edu_specialization" class="form-control" required> 
  <option value="sci" >Science</option>
  <option value="commerce" >Commerce</option>
  <option value="arts" >Arts</option>
  <option value="engg" >Engineering</option>
  <option value="sales" >Sales</option>
  <option value="marketing" >Marketing</option>
</select>
{{ ($errors->has('edu_specialization')) ? $errors->first('edu_specialization') : '' }}
</div>
 </div><!-- /.form-group -->
									
<div class="form-group">
 <label>How did you get to know about Realty Matrix                             <span style="color:red;">*</span></label>
 <div class="select-wrapper">
  <select name="get_to_know_realtymatrix" class="form-control"  required> 
  <option value="customers" >Customers </option>
  <option value="other_agents" >Other Agents</option>
  <option value="marketing" >Marketing / Advertising</option>
</select>
{{ ($errors->has('get_to_know_realtymatrix')) ? $errors->first('get_to_know_realtymatrix') : '' }}
</div>
 </div><!-- /.form-group -->
									
<div class="form-group">
  <label>Referred by Other Agent(if it is selected above)</label>
  <input type="text" class="form-control" name="refered_other_agent">
{{ ($errors->has('refered_other_agent')) ? $errors->first('refered_other_agent') : '' }}
</div><!-- /.form-group -->
									
  <div class="form-group">
   <label>Brief Profile Description                              <span style="color:red;">*</span></label>
   <textarea cols="30" rows="7" class="form-control" name="desc" style="resize:none;"required></textarea>
{{ ($errors->has('desc')) ? $errors->first('desc') : '' }}
  </div><!-- /.form-group -->
  </div><!--col-sm-4 -->
</div><!--col-sm-12 -->
<div class="form-group center">
  <input type="submit" value="Register" class="btn btn-inversed btn-primary" class="form-control">
   </div><!--form-group -->
  </div> <!--box -->
</form>
</div><!--row -->
</div><!--block-content-inner -->
</div><!--block-content block-content-small-padding -->
</div><!--container -->

@endsection

<script>
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



function check() {
    if(document.getElementById('pwd0').value === document.getElementById('confirm_password').value) {
        document.getElementById('message').innerHTML = "match";
		document.getElementById('submit').disabled = false;
    } else {
        document.getElementById('message').innerHTML = "no match";
		document.getElementById('submit').disabled = true;
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




</script>