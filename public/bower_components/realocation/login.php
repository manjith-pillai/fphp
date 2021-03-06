<?php require_once 'helpers/functions.php'; ?>

<?php get_header($title = 'Login'); ?>

    <div id="main-wrapper">
        <div id="main">
            <div id="main-inner">
                <div class="container">
                    <div class="block-content block-content-small-padding">
                        <div class="block-content-inner">
                            <div class="row">
                                <div class="col-sm-4 col-sm-offset-4">
                                    <h2 class="center">Login</h2>

                                    <div class="box">
                                        <form method="post" action="?">
                                            <div class="form-group">
                                                <label>Login</label>
                                                <input type="email" class="form-control">
                                            </div><!-- /.form-group -->

                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="password" class="form-control">
                                            </div><!-- /.form-group -->

                                            <div class="form-group">
                                                <input type="submit" value="Login" class="btn btn-primary btn-inversed btn-block">
                                            </div><!-- /.form-group -->
                                        </form>
                                    </div><!-- /.box -->
                                </div>
                            </div><!-- /.row -->
                        </div><!-- /.block-content-inner -->
                    </div><!-- /.block-content -->
                </div><!-- /.container -->
            </div><!-- /#main-inner -->
        </div><!-- /#main -->
    </div><!-- /#main-wrapper -->

<?php get_footer($footer = 'blank'); ?>