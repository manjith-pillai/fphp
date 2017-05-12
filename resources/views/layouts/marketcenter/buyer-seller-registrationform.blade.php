@extends('layouts.marketcenter.marketcentertemplate')
@section('content')

   <div class="container">
   <div class="block-content block-content-small-padding">
    <div class="block-content-inner">
     <div class="row">
	<div class="col-sm-12">
    <div class="col-sm-5">
    <h3> Register with us for FREE                                         !</h3>
    <div class="box">
	<form method="post" action="{{ url('/register') }}">
	{{ csrf_field() }}
   <div class="form-group">
  <label>E-mail(User ID)                                           <span style="color:red;">*</span></label>
   <input type="email" class="form-control" name="email">
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
 <label>Name                                         <span style="color:red;">*</span></label>
  <input type="text" class="form-control" name="name" required>
   </div><!-- /.form-group -->

  <div class="form-group">
  <label>Residing City                                       <span style="color:red;">*</span></label>
  <div class="select-wrapper">
  <select name="selectionField" class="form-control"> 
  <option value="CA" >California -- CA </option>
  <option value="CO" >Colorado -- CO</option>
  <option value="CN" >Connecticut -- CN</option>
</select>
</div>
  </div>
  
  
  <!--<td class="rel">
    <span class="lf rel" style="width: 214px;">
        <input type="text" name="Password" maxlength="50" autocomplete="off" valtype="password" required="required">
        <span class="abs f13 passShow" onclick="hideShowPassword(this);">Hide</span>
    </span>
    </td> -->
<table>

 <div class="form-group">
 <tr>
 <td>
  <label>Password                                           <span style="color:red;">*</span></label>
  </td>
  </tr>
  
    <tr>
	<td>
<span><input type="password" name="password" id="password" style="width:333px; height:34px; border:2px solid rgba(0,0,0,0.1);"  />
<input type="button" class="btn btn-inversed btn-primary" value="Show" onclick="if(password.type=='text')password.type='password'; else password.type='text';" ></span></td>
</tr>




</div>
  </table>
   
   <div class="form-group">
   <label>Confirm Password                                            <span style="color:red;">*</span></label>
   <input type="password" class="form-control" name="password_confirmation" id="confirm_password" onchange="check()"/>
   <span id='message'></span><br>
    </div><!-- /.form-group -->
	<input type="checkbox">      Receive Marketing Flyers & Relevant Info
	<br>
	<input type="checkbox" name="terms" required>       I agree to the <a href="#"><u> Terms & Conditions</u></a>
	
	<p>
<!--<a href="#"><u> Terms & Conditions </u></a> --> </p>
 <!--<button onclick="document.getElementById('id02').style.display='block'" 
 style="width:auto;">Terms & Conditions</button>
   <div id="id02" class="modal">
  
  <form class="modal-content animate" action="#">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
     </div>

    <div class="container" style="background-color:#fff; width: 463px;">
      <h1> Terms & Conditions </h1>
     </div>

    
  </form>
</div> <!-- id02 --->
   <div class="form-group">
   <input type="submit" value="Register" class="btn btn-primary btn-inversed btn-block">
   
    </div><!-- /.form-group -->
	</form>
    </div><!-- /.box -->
    </div> <!-- /.col-sm-5 -->
	
  <div class="col-sm-2">
   <div class="vOR rel lf">
    <div class="vORcir f12 b"></div>
     </div>
	</div>
 <div class="col-sm-5">
   <h3>  Already Registered, Login Below </h3>
    <div class="box">
	<form action="{{ url('/login') }}" method="post" role="form">
	
		 {{ csrf_field() }}
      
    <div class="form-group">
              <span style="color:red;font-size:20px;">*</span><label>Registered Email Address/Mobile Number</label>
<input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>
</div><!-- /.form-group -->
			 
	<div class="form-group">
<span style="color:red;font-size:20px;">*</span><label>Password  (<u>Forgot Password?</u>  |<u> New User</u>)                                              </label>
 <input type="password" class="form-control" name="password" placeholder="Password" required>
</div><!-- /.form-group -->		 
			 
			 
			 
			 
  
				 
	<!--<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Forgot Password</button>
	<div id="id01" class="modal">
  
  <form class="modal-content animate" action="?">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      
    </div>

    <div class="container" style="background-color:#fff; width: 463px;">
<label><b>Email Address</b></label>
      <input type="text" placeholder="Enter Email Address" name="email" required>
<label><b>Mobile Phone</b></label>
      <input type="text" onkeydown="return isNumber(event);" maxlength="10"  required />
      <button type="submit">Submit</button>
      
    </div>
 </form>
</div> -->
<div class="form-group center">
  <input type="submit" value="Login" class="btn btn-primary btn-inversed btn-block"> <!--onclick="validatePassword()"-->
  
   </div> <!--form-group center -->
  <h2 style="text-align:center;">OR </h2>
   
   <div class="form-group center">
  <input type="submit" value="Sign in using Facebook" class="btn btn-primary btn-inversed btn-block btn-md">
  
   </div> <!--form-group center -->
   
   
   <div class="form-group center">
  <input type="submit" value="Sign in using Google+" class="btn btn-danger btn-inversed btn-block btn-md" >
  
   </div> <!--form-group center -->
   
   </form>
</div><!-- /.box -->
</div> <!-- /.col-sm-5 -->


<div class="form-group center">
  <a href="/agents/create"> <input type="button" value="Signin as Agent" class="btn btn-inversed btn-primary"></a>
   </div>
   <div class="form-group center">
   <a href="#"><input type="button" value="Signin as Builder" class="btn btn-inversed btn-primary"></a>
   </div> <!--form-group center -->
	
</div> <!-- /. col-sm-12 -->

</div><!-- /.row -->
</div><!-- /.block-content-inner -->
 </div><!-- /.block-content -->
</div><!-- /.container -->
 
						
@endsection





