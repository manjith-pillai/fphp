@include('layouts.marketcenter.content')

@include('layouts.marketcenter.helpers.header')

<div id="main-wrapper">
    <div id="main">
        <div id="main-inner">
			@yield('content')
        </div><!-- /#main-inner -->
    </div><!-- /#main -->
</div><!-- /#main-wrapper -->

@include('layouts.marketcenter.helpers.footer')