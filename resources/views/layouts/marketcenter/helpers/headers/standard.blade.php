<div id="header">
    <div id="header-inner">
        <div class="header-bar">
            <div class="container">
               <div class="header-infobox">
                    <strong>E-mail:</strong> <a href="#">info@realtymatrix.com</a>
                </div><!-- /.header-infobox-->

               <div class="header-infobox">
                    <strong>Phone:</strong> 9717-991-912
                </div><!-- /.header-infobox-->
				@include('layouts.marketcenter.helpers.navigation-secondary')
                
            </div><!-- /.container -->
        </div><!-- /.header-bar -->

        <div class="header-top">
            <div class="container">
                <div class="header-identity">
                    <a href="/" class="header-identity-target">
                        <span class="header-icon"><i class="fa fa-home"></i></span> 
                        <span class="header-title">RealtyMatrix</span><!-- /.header-title -->
                        <span class="header-slogan">Redefining Realty</span><!-- /.header-slogan -->
                    </a><!-- /.header-identity-target-->
                </div><!-- /.header-identity -->

                <div class="header-actions pull-right">
                    <!--<a href="create-agency.html" class="btn btn-regular">Create Agency Profile</a> -->
					
                                                          <a href="/" class="btn btn-primary"><i class="fa fa-plus"></i>Submit Requirement</a>	<strong class="separator">or</strong> 				
					<a href="/" class="btn btn-primary"><i class="fa fa-plus"></i>Submit Property</a>
                </div><!-- /.header-actions -->

                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".header-navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div><!-- /.container -->
        </div><!-- .header-top -->

        <div class="header-navigation">
            <div class="container">
                <div class="row">
				@include('layouts.marketcenter.helpers.navigation')
                    

                    <div class="form-search-wrapper col-sm-3">
                       <!-- <form method="post" action="?" class="form-horizontal form-search">
                            <div class="form-group has-feedback no-margin">
                                <input type="text" class="form-control" placeholder="Search">

                                <span class="form-control-feedback">
                                    <i class="fa fa-search"></i>
                                </span><!-- /.form-control-feedback -->
                            <!--</div><!-- /.form-group -->
                       <!-- </form> -->
                    </div>
                </div>
            </div><!-- /.container -->
        </div><!-- /.header-navigation -->
    </div><!-- /.header-inner -->
</div><!-- /#header -->