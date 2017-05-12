@extends('layouts.marketcenter.marketcentertemplate')
@section('content')
    <!-- Scripts -->
<script>
    window.Laravel = <?php echo json_encode([
    'csrfToken' => csrf_token(),
    ]); ?>
</script>

<!-- Main Content -->
<div class="container">
    <div class="block-content block-content-small-padding">
        <div class="block-content-inner">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-4">
					<h2 class="center">Reset Password</h2>
					<div class="box">
						<form action="{{ url('/password/email') }}" method="post" role="form">
						{{ csrf_field() }}
							<div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>
                            </div>
							
							<div class="form-group">
                                <button class="btn btn-primary btn-inversed btn-block">Send Reset Password Link</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
						

@endsection
