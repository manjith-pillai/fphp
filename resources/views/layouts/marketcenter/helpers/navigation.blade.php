<ul class="header-nav nav nav-pills">
    <li class="menuparent">
        <a href="/">Home</a>

        <!--<ul class="sub-menu">
            <li><a href="index.html">Map Version</a></li>
            <li><a href="homepage-static-image.html">Static Image</a></li>
            <li><a href="homepage-sidebar.html">Sidebar Version</a></li>
            <li class="menuparent">
                <a href="#">Map Styles</a>

                <ul class="sub-menu">
                    <li><a href="index.html?style=1">Version 1</a></li>
                    <li><a href="index.html?style=2">Version 2</a></li>
                    <li><a href="index.html?style=3">Version 3</a></li>
                    <li><a href="index.html?style=4">Version 4</a></li>
                    <li><a href="index.html?style=5">Version 5</a></li>
                    <li><a href="index.html?style=6">Version 6</a></li>
                    <li><a href="index.html?style=7">Version 7</a></li>
                    <li><a href="index.html?style=8">Version 8</a></li>
                </ul>
            </li>
        </ul>-->
    </li>

    <li class="menuparent">
        <a href="{{ url('/property') }}">Properties</a>

        <ul class="sub-menu">
		<li><a href="{{ url('/property/create') }}">Sell</a></li>
		<li><a href="{{ url('/requirement/create') }}">Buy</a></li>
		<li><a href="/">Rent</a></li>
        <li><a href="/">Best Rated Properties</a></li>
		
		<li>
		@if(Auth::check())
		
		<a href="{{ url('/retrieveproperty') }}">My properties</a>
		@endif
		</li>
            
            <!--<li><a href="/property">Grid Style</a></li>
            <li><a href="/properties-isotope">Isotope Grid</a></li> -->
        </ul>
    </li>
	
	
	<li class="menuparent">
        <a href="{{ url('/agents') }}">Agents</a>
        <ul class="sub-menu">
		<li><a href="/">Search Agents</a></li>
		
		<li>@if(Auth::check())
		<a href="#">My Agents</a>
	     @endif
	     </li>
		<li><a href="{{ url('/agents/create') }}">Create Agents</a></li>
		
            <!--<li><a href="/">Agent Detail</a></li>
            <li><a href="agents-small.html">Small Boxes</a></li>
            <li><a href="agents-rows.html">Row Style</a></li>
            <li><a href="/agents">Grid Style</a></li>-->
        </ul>
    </li>

    <li class="menuparent">
        <a href="#">Market Center</a>

        <ul class="sub-menu">
           <li><a href="{{ url('/marketcenter/create') }}">Request for MC</a></li>
        </ul>
    </li>

	<li class="menuparent">
        <a href="/portaldocument">Documents</a>

        <ul class="sub-menu">
           <li><a href="{{ url('/') }}">My Documents</a></li>
		   
		   <li><a href="{{ url('/portaldocument/create') }}">create Documents</a></li>
        </ul>
    </li>
    <li class="menuparent">
        <a href="#">Others</a>

        <ul class="sub-menu">
           <li><a href="{{ url('/subscription') }}">Pricing</a></li>
        </ul>
    </li>

    <!--<li class="menuparent">
        <a href="#">Pages</a>

        <ul class="sub-menu">
            <li class="menuparent">
                <a href="#">Headers</a>
                <ul class="sub-menu">
                    <li><a href="header-standard.html">Standard</a></li>
                    <li><a href="header-no-topbar.html">No Topbar</a></li>
                    <li><a href="header-social-icons.html">Social Icons</a></li>
                    <li><a href="header-minimal.html">Minimal</a></li>
                    <li><a href="header-classic.html">Classic</a></li>
                </ul>
            </li>
            <li><a href="submit-property.html">Submit Property</a></li>
            <li><a href="create-agency.html">Create Agency</a></li>
            <li><a href="my-properties.html">My Properties</a></li>
            <li><a href="features.html">Features</a></li>
            <li><a href="/subscription">Pricing</a></li>
            <li><a href="faq.html">FAQ</a></li>
            <li><a href="invoice.html">Invoice Template</a></li>
            <li><a href="login.html">Login Form</a></li>
            <li><a href="renew-password.html">Renew Password</a></li>
            <li><a href="register.html">Registration</a></li>
            <li><a href="change-password.html">Change Password</a></li>
            <li><a href="terms-conditions.html">Terms &amp; Conditions</a></li>
            <li><a href="grid.html">Grid Layout</a></li>
            <li><a href="404.html">404 - Not Found</a></li>
            <li><a href="500.html">500 - Internal Error</a></li>
        </ul>
    </li> -->
    <!--<li class="menuparent">
        <a href="#">Blog</a>
        <ul class="sub-menu">
            <li><a href="blog-left.html">Left Sidebar</a></li>
            <li><a href="blog-right.html">Right Sidebar</a></li>
            <li><a href="blog-fullwidth.html">Fullwidth</a></li>
			<li><a href="/portal_documents">Documents</a></li>
			<li><a href="{{ url('/requirement/create') }}">Requirements</a></li>
        </ul>
    </li>-->
</ul><!-- /.header-nav -->