<div class="footer-top">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
               
				@include('layouts.marketcenter.helpers.widgets.links')
            </div>

            <div class="col-sm-3">
             
				@include('layouts.marketcenter.helpers.widgets.recent-posts')
            </div>

            <div class="col-sm-3">
			@include('layouts.marketcenter.helpers.widgets.contact')
              
            </div>

            <div class="col-sm-3">
			@include('layouts.marketcenter.helpers.widgets.recent-properties')
              
                
            </div>

        </div><!-- /.row -->

        <hr>

        <div class="row">
            <div class="col-sm-9">
			@include('layouts.marketcenter.helpers.widgets.navigation-footer')
                
            </div>

            <div class="col-sm-3">
                <form method="post" action="?" class="form-horizontal form-search">
                    <div class="form-group has-feedback no-margin">
                        <input type="text" class="form-control" placeholder="Search">

                        <span class="form-control-feedback">
                            <i class="fa fa-search"></i>
                        </span><!-- /.form-control-feedback -->
                    </div><!-- /.form-group -->
                </form>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.footer-top -->