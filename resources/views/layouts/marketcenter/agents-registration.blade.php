@extends('layouts.marketcenter.marketcentertemplate')
@section('content')

  <div class="container">
 <div class="block-content block-content-small-padding">
 <div class="block-content-inner">
 <div class="row">
 <h2 class="center">AGENT'S REGISTRATION</h2>
<form method="post" action="/store">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="box">
<div class="col-sm-12">
<div class="col-sm-4">
   <!--<div class="form-group">
   <label>User ID</label>
   <input type="text" class="form-control">
  </div><!-- /.form-group -->

 <div class="form-group">
  <label>Email</label>
  <input type="text" name="email" class="form-control">
 {{ ($errors->has('email')) ? $errors->first('email') : '' }}
  </div><!-- /.form-group -->
									
  <div class="form-group">
   <label>First Name</label>
  <input type="text" name="fname" class="form-control">
  {{ ($errors->has('fname')) ? $errors->first('fname') : '' }}
   </div><!-- /.form-group -->
									
	<div class="form-group">
    <label>Surname</label>
    <input type="text" name="surname" class="form-control">
	{{ ($errors->has('surname')) ? $errors->first('surname') : '' }}
    </div><!-- /.form-group -->
									
	<div class="form-group">
    <label>Work Phone</label>
  <input type="text"  name="work_phone" class="form-control">
	{{ ($errors->has('work_phone')) ? $errors->first('work_phone') : '' }}
    </div><!-- /.form-group -->
	
	
	<div class="form-group">
    <label>Work Location</label>
  <select name="work_loc" class="form-control"> 
  <option value="noida" >Noida </option>
  <option value="us">US</option>
  <option value="ghaziabad">Ghaziabad</option>
  <option value="faridabad">Faridabad</option>
</select>
	{{ ($errors->has('work_loc')) ? $errors->first('work_loc') : '' }}
    </div><!-- /.form-group -->
									
   <div class="form-group">
   <label>Mobile Phone</label>
   <input type="text" onkeydown="return isNumber(event);" maxlength="10"  
   name="work_phone"
   class="form-control"/>
	{{ ($errors->has('mobile_phone')) ? $errors->first('mobile_phone') : '' }}
   </div><!-- /.form-group -->
									
  <div class="form-group">
  <label>Deal Size</label>
  <select multiple class="form-control" name="deal_size">
  <option value="0-25lac">0 - 25 Lac</option>
  <option value="25-50lac">25 - 50 Lac</option>
  <option value="50lac-1cr">50 Lac- 1 Cr</option>
  <option value="1cr-2cr">1 Cr - 2 Cr</option>
   <option value="2cr-5cr">2 Cr - 5 Cr</option>
 </select>
{{ ($errors->has('deal_size')) ? $errors->first('deal_size') : '' }}
</div><!-- /.form-group -->
  <div class="form-group">
   <label>Bank Name</label>
   <input type="text" name="bank_name" class="form-control">
	{{ ($errors->has('bank_name')) ? $errors->first('bank_name') : '' }}
    </div><!-- /.form-group -->
								
		</div> <!-- /col-sm-4 -->
									
<div class="col-sm-4">
	<div class="form-group">
      <label>Address Postal Code</label>
     <input type="text" name="address_postal_code" class="form-control">
	{{ ($errors->has('address_postal_code')) ? $errors->first('address_postal_code') : '' }}
     </div><!-- /.form-group -->

  <div class="form-group">
  <label>Street Address</label>
 <input type="text" name="street_address" class="form-control">
	{{ ($errors->has('street_address')) ? $errors->first('street_address') : '' }}
  </div><!-- /.form-group -->
									
  <div class="form-group">
  <label>Specialization</label>
  <select multiple class="form-control" name="specialization">
  <option value="buy">Buy</option>
  <option value="sell">Sell</option>
  <option value="lease">Lease</option>
  <option value="counsel">Counsel</option>
  {{ ($errors->has('specialization')) ? $errors->first('specialization') : '' }}
   
</select>
  </div><!-- /.form-group -->
									
<div class="form-group">
 <label>Primary Product Categories</label>
  <select multiple class="form-control" name="primary_prod_cat">
  <option value="residential">Residential</option>
  <option value="plot">Plot</option>
  <option value="flat">Flat</option>
  <option value="commercial">Commercial</option>
   <option value="retail">Retail</option>
  
</select>
  {{ ($errors->has('primary_prod_cat')) ? $errors->first('primary_prod_cat') : '' }}
  </div><!-- /.form-group -->
									
 <div class="form-group">
    <label>Years Of Reality Experience</label>
 <input type="text" class="form-control" name="years_relaty_exp">
{{ ($errors->has('years_relaty_exp')) ? $errors->first('years_relaty_exp') : '' }}
 </div><!-- /.form-group -->
									
	<div class="form-group">
    <label>Bank Account Number</label>
    <input type="text" name="bank_no" class="form-control">
	{{ ($errors->has('bank_no')) ? $errors->first('bank_no') : '' }}
     </div><!-- /.form-group -->
									
	</div> <!--/.col-sm-4-->
									
 <div class="col-sm-4">
<div class="form-group">
<label>Educational Qualification</label>
<select class="form-control" name="edu_qualification">
  <option value="ug">Under Graduate</option>
  <option value="graduate">Graduate</option>
  <option value="pg">Post Graduate</option>
  <option value="masters">Masters</option>
</select>
{{ ($errors->has('edu_qualification')) ? $errors->first('edu_qualification') : '' }}
 </div><!-- /.form-group -->

 <div class="form-group">
 <label>Educational Specialization</label>
  <select name="edu_specialization" class="form-control"> 
  <option value="sci" >Science</option>
  <option value="commerce" >Commerce</option>
  <option value="arts" >Arts</option>
  <option value="engg" >Engineering</option>
  <option value="sales" >Sales</option>
  <option value="marketing" >Marketing</option>
</select>
{{ ($errors->has('edu_specialization')) ? $errors->first('edu_specialization') : '' }}
 </div><!-- /.form-group -->
									
<div class="form-group">
 <label>How did you get to know about Realty Matrix </label>
  <select name="get_to_know_realtymatrix" class="form-control"> 
  <option value="customers" >Customers </option>
  <option value="other_agents" >Other Agents</option>
  <option value="marketing" >Marketing / Advertising</option>
</select>
{{ ($errors->has('get_to_know_realtymatrix')) ? $errors->first('get_to_know_realtymatrix') : '' }}
 </div><!-- /.form-group -->
									
<div class="form-group">
  <label>Referred by Other Agent(if it is selected above)</label>
  <input type="text" class="form-control" name="refered_other_agent">
{{ ($errors->has('refered_other_agent')) ? $errors->first('refered_other_agent') : '' }}
</div><!-- /.form-group -->
									
  <div class="form-group">
   <label>Brief Profile Description</label>
   <textarea cols="30" rows="7" class="form-control" name="desc" style="resize:none;"></textarea>
{{ ($errors->has('desc')) ? $errors->first('desc') : '' }}
  </div><!-- /.form-group -->
									
<div class="form-group">
<label>Bank's IFSC Code</label>
 <input type="text"  name="ifsc_code" class="form-control">
{{ ($errors->has('ifsc_code')) ? $errors->first('ifsc_code') : '' }}
   </div><!-- /.form-group -->
</div><!--col-sm-4 -->
</div><!--col-sm-12 -->
<div class="form-group center">
  <input type="submit" value="Register" class="btn btn-inversed btn-primary">
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
</script>