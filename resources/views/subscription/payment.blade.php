@extends('layouts.marketcenter.marketcentertemplate')
@section('content')
<div class="container">
   <div class="block-content block-content-small-padding">
    <div class="block-content-inner">
	 <div class="row">


<form action="{{ url('/confirmation') }}">

	{{ csrf_field() }} 
	
	
	<div class="form-group">
  <label>Client Number (normally hidden)</label>
   <input type="text" class="form-control" name="client_no">
	</div><!-- /.form-group -->
	
	<div class="form-group">
  <label>Mode (normally hidden)</label>
   <input type="text" class="form-control" name="mode">
	</div><!-- /.form-group -->
	
	<div class="form-group">
  <label>Session ID (normally hidden)</label>
   <input type="text" class="form-control" name="inSessionID">
	</div><!-- /.form-group -->
	
	<div class="form-group">
  <label>Collection Amount</label>
   <input type="text" class="form-control" name="collection_amount">
	</div><!-- /.form-group -->

    
	
	
	<div class="form-group">
  <label>Card Number</label>
   <input type="text" class="form-control" name="cc_no" placeholder="4111111111111111" />
   <span id="err_cc_no" class="jserror"> </span>
	</div><!-- /.form-group -->
	
	<div class="form-group">
  <label>Expiry Date</label>
         <div class="select-wrapper">

   <select  name="expiry" class="form-control">

                            <option value="">Month</option>

                            <option value="1" selected="selected">January</option>                                

                            <option value="2">February</option>                             

                            <option value="3">March</option>                          

                            <option value="4">April</option>                          

                            <option value="5">May</option>                           

                            <option value="6">June</option>                           

                            <option value="7">July</option>                          

                            <option value="8">August</option>                            

                            <option value="9">September</option>                    

                            <option value="10">October</option>                             

                            <option value="11">November</option>                            

                            <option value="12">December</option>                            

                        </select>
						</div>
	</div><!-- /.form-group -->
	
	<div class="form-group">
  <label>Month</label>
   <div class="select-wrapper">
	<select name="month" class="form-control">

<option value="">Month</option>

                            <option value="2016" selected="selected">2016</option>                                

                            <option value="2017">2017</option>                             

                            <option value="2018">2018</option>                          

                            <option value="2019">2019</option>                          

                            <option value="2020">2020</option>                           

                            <option value="2021">2021</option>                           

                            <option value="2022">2022</option>                          

                            <option value="2023">2023</option>                            

                            <option value="2024">2024</option>                    

                            <option value="2025">2025</option>                             

                            <option value="2026">2026</option>                            

                            <option value="2027">2027</option>

<option value="2028">2028</option>                            

                            <option value="2029">2029</option>

<option value="2030">2030</option>

                        </select>                        

</div>
</div>


<div class="form-group">
  <label>Security Code</label>
   <input type="text" class="form-control" name="securitygroup" placeholder="111" />
	</div><!-- /.form-group -->
	
	
	<div class="form-group">
	 <input type="radio" name="payusingnet30" value="" />
  <label>Pay using Net 30</label>
  
	</div><!-- /.form-group -->
	
	<div class="form-group">
	<input type="radio" name="payusingnet10" value="" />
  <label>Pay using Net 10</label>
   
	</div><!-- /.form-group -->
	
	
      <div class="form-group center">
                                    <input type="submit" value="Submit" class="btn btn-inversed btn-primary">
  </div><!-- /.form-group -->      
	

</form>
</div> <!-- /.row -->
</div><!-- /.block-content-inner -->
 </div><!-- /.block-content -->
</div><!-- /.container -->
@endsection
