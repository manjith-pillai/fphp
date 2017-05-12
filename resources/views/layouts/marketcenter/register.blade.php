@extends('layouts.marketcenter.marketcentertemplate')
  
@section('content')

                <div class="container">
                    <div class="block-content block-content-small-padding">
                        <div class="block-content-inner">
                            <div class="row">
                                <div class="col-sm-4 col-sm-offset-4">
                                    <h2 class="center">Register</h2>

                                    <div class="box">
                                        <form method="post" action="{{ url('/register') }}">
										{{ csrf_field() }}
                                            <div class="form-group">
                                                <label>E-mail</label>
                                                <input type="email" name="email" class="form-control">
                                            </div><!-- /.form-group -->

                                            <div class="form-group">
                                                <label> Name</label>
                                                <input type="text" name="name" class="form-control">
                                            </div><!-- /.form-group -->

                                            

                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="password" name="password" class="form-control">
                                            </div><!-- /.form-group -->

                                            <div class="form-group">
                                                <label>Confirm Password</label>
                                                <input type="password" name="password_confirmation" class="form-control" required>
                                            </div><!-- /.form-group -->

                                            <div class="form-group">
                                                <input type="submit" value="Register" class="btn btn-primary btn-inversed btn-block">
                                            </div><!-- /.form-group -->
                                        </form>
                                    </div><!-- /.box -->
                                </div>
                            </div><!-- /.row -->
                        </div><!-- /.block-content-inner -->
                    </div><!-- /.block-content -->
                </div><!-- /.container -->
            
@endsection