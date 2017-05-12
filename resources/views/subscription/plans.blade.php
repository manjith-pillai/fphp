@extends('layouts.marketcenter.marketcentertemplate')
@section('content')

<div class="box box-primary">
		<div class="center">
            <div class="box-header with-border">
              <h3 class="box-title">Thank you</h3>
           </div>
            
            <!-- /.box-header -->
			<form class="form-horizontal" action="/subscription/{{$subscription->id}}" method="post">
            <div class="box-body">
			<div class="center">
			<h3>You are going to subscribe our {{$subscription->name}} Plan!!!</h3>
			<p>Click to Continue</p>
			</div>
			
			<div class="box-footer">
				<input type="hidden" name="_method" value="put">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
				<a href="/subscription"><input type="button" class="btn btn-primary" value="Cancel"></a>
                <input type="submit" name="Submit" class="btn btn-primary" value="Continue">
              </div>
			
			</div>
			</form>
			</div>
		</div>
			
@endsection