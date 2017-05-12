@extends('layouts.marketcenter.marketcentertemplate')
@section('content')
<div class="container">
     <div class="block-content block-content-small-padding">
    <div class="block-content-inner">
  <h2 class="center">Create MarketCenter</h2>


<form method="post" action="/marketcenter">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
   <div class="box">

 <div class="form-group">
  <label>Name</label>
    <input type="text" class="form-control" name="name">
    </div><!-- /.form-group -->

    <div class="form-group">
  <label>Email-Address</label>
    <input type="email" class="form-control" name="email">
    </div><!-- /.form-group -->

     <div class="form-group">
     <label>Name Of Company/Group</label>
     <input type="text" class="form-control" name="company_name">
    </div><!-- /.form-group -->

<div class="form-group">
     <label>Phone Number</label>
     <input type="number" class="form-control" name="phoneno">
    </div><!-- /.form-group -->

  </div><!-- /.box -->

   <div class="row">
     <div class="col-sm-4">
      <h3>Contact</h3>
<div class="box">
   <div class="form-group">
 <label>Office Phone No</label>
      <input type="number" class="form-control" name="office_phone_no">
       </div><!-- /.form-group -->

    <div class="form-group">
   <label>Office Email Id</label>
<input type="email" class="form-control" name="office_email_id">
  </div><!-- /.form-group -->

  <div class="form-group">
 <label>Office Address</label>
 <textarea name="office_address" class="form-control"></textarea>
 </div><!-- /.form-group -->
</div><!-- /.box -->
</div>

 <div class="col-sm-4">
 <h3>Payment</h3>
<div class="box">
<div class="form-group">
  <label>Area of Operations </label>
<div class="select-wrapper">
  <select class="form-control" name="operations">
   <option value="buy">Buy</option>
<option value="sell">Sell</option>
<option value="lease">Lease</option>
</select>
</div>
</div>

 <div class="form-group">
  <label>Current Team Size</label>
<div class="select-wrapper" >
 <select class="form-control" name="team_size">
<option value="1-5">1-5</option>
<option value="5-10">5-10</option>
<option value="10-15">10-15</option>
<option value="15-20">15-20</option>

</select>
</div>
</div>

 <div class="form-group">
   <label>Years in business</label>
<div class="select-wrapper" >
<select class="form-control" name="business_years">
<option value="17-16">2017-2016</option>
<option value="16-15">2016-2015</option>
<option value="15-14">2015-2014</option>
<option value="14-13">2014-2013</option>
  </select>
  </div>
</div>
</div>
</div>

  <div class="col-sm-4">
 <h3>Additional Perks</h3>
<div class="box">
 <div class="form-group">
<label>Geography Handled</label>
<input type="text" class="form-control" name="geography">

</div><!-- /.form-group -->

<div class="form-group">
<label>Source of RM Reference</label>
<div class="select-wrapper">
<select class="form-control" name="rm_refrence">
<option value="newspaper">Newspaper</option>
<option value="internet">Internet</option>
<option value="word_of_mouth">Word Of Mouth</option>
<option value="marketing">Marketing</option>
  </select>
  </div>

</div><!-- /.form-group -->


<div class="form-group">
<label>Why do you want to partner with RealtyMatrix</label>
<textarea class="form-control" name="realty_matrix">
</textarea>
</div><!-- /.form-group -->

                                            
</div><!-- /.box -->
 </div>
  </div><!-- /.row -->

<div class="box">
   <div class="form-group checkbox">
     <label><input type="checkbox"> Send me newsletter</label>
    </div><!-- /.form-group -->

   <div class="form-group checkbox">
  <label><input type="checkbox"> I agree with <a href="#">terms and conditions</a></label>
    </div><!-- /.form-group -->
   </div><!-- /.form-group -->

  <div class="form-group center">
 <input type="submit" value="Create MarketCenter" class="btn btn-inversed btn-primary">
    </div><!-- /.form-group -->
   </form>
 </div><!-- /.block-content-inner -->
 </div><!-- /.block-content -->
</div><!-- /.container -->
            

@endsection