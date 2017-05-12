@extends('layouts.marketcenter.marketcentertemplate')

@section('content')
			@include('layouts.marketcenter.helpers.blocks.map')
			<div class="container">
				@include('layouts.marketcenter.helpers.blocks.slogan')
				@include('layouts.marketcenter.helpers.blocks.isotope-grid')
				@include('layouts.marketcenter.helpers.blocks.carousel')
				@include('layouts.marketcenter.helpers.blocks.statistics')
				@include('layouts.marketcenter.helpers.blocks.hexs')               
            </div><!-- /.container -->
@endsection