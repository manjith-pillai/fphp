@extends('layouts.marketcenter.marketcentertemplate')
  
@section('content')
<div class="container">
    <div class="block-content block-content-small-padding">
        <div class="block-content-inner">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-4">
					<h2 class="center">Login</h2>
					<div class="box">
						<form action="login" method="post" role="form">
						{{ csrf_field() }}
							<div class="form-group">
                                <label>Login</label>
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Password" required>
                            </div>

                            <div class="form-group">
                                <input type="submit" value="Login" class="btn btn-primary btn-inversed btn-block">
								<div class="fb-login-button" data-max-rows="1" data-size="xlarge" data-show-faces="false" data-auto-logout-link="true"></div>
							</div>
											
							<div class="center">
								<a href="{{ route('social.login',['facebook']) }}"><img src="/images/facebook.png" alt="Facebook Signin"></a>
								<a href="{{ route('social.login',['google']) }}"><img src="images/google-plus.png" alt="Google Signin"></a>
							</div>
						</form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection












