@extends('layouts.marketcenter.marketcentertemplate')

@section('content')


                <div class="container">
                    <div class="block-content block-content-small-padding">
                        <div class="block-content-inner">
                            <div class="row">
                                <div class="col-sm-4 col-sm-offset-4">
                                    <h2 class="center">Create Document</h2>

                                    <div class="box">
                                        <form method="post" action="/portaldocument" enctype="multipart/form-data">
										{{ csrf_field() }}
                                            <div class="form-group">
                                                <label>Title :</label>
                                                <input type="text" class="form-control" id="inputtitle" placeholder="title" name="title" size="30">
					{{ ($errors->has('title')) ? $errors->first('title') : '' }}
                                            </div><!-- /.form-group -->

                                            <div class="form-group">
                                                <label> Description :</label>
                                                <textarea class="form-control" name="description" rows="8" cols="40" size="50" placeholder="this is description"></textarea>
                    
	                 {{ ($errors->has('description')) ? $errors->first('description') : '' }} 
                                            </div><!-- /.form-group -->

                                            

                                            <div class="form-group">
                                                <label>Upload File :</label>
                                                <input type="file" name="file">
                                            </div><!-- /.form-group -->

                                            

                                            <div class="form-group">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button onclick="goBack()" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-info">create</button>
 </div><!-- /.form-group -->
  </form>
  </div><!-- /.box -->
 </div>
 </div><!-- /.row -->
</div><!-- /.block-content-inner -->
</div><!-- /.block-content -->
</div><!-- /.container -->
            	
@endsection

