@extends('layouts.marketcenter.marketcentertemplate')
@section('content')
<div class="box box-primary">
		<div class="center">
            <div class="box-header with-border">
              <h3 class="box-title">Subscribed!!!</h3>
           </div>
            
            <!-- /.box-header -->
			<form class="form-horizontal" action="/">
            <div class="box-body">
			<h3>Thank you for subscribing. All new features has been Unlocked.</h3>
			
			
			<div class="box-footer">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" name="Submit" class="btn btn-primary" value="Go Home">
				<p>OR</p>
				<a href="/property/create"><input type="button" name="createproperty" class="btn btn-primary" value="Create property"></a>
				<a href="/requirement/create"><input type="button" name="createrequirement" class="btn btn-primary" value="Create Requirement"></a>
              </div>
			
			</div>
			
			</form>
			</div>
		</div>
			
@endsection
