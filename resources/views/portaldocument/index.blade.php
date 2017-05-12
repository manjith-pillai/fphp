@extends('layouts.marketcenter.marketcentertemplate')

@section('content')
<!-- get session message -->
@if (session('message'))
    <div class="alert alert-success fade in">
       <a href="" class="close" data-dismiss="alert">&times;</a>
       <strong>Success!</strong> {{ Session::get('message') }}
    </div>
@endif

<!-- page_title and dscription -->


<div class="container">
                    <div class="block-content block-content-small-padding">
                        <div class="block-content-inner">
                            <h2 class="center">View Document</h2>
							

                            <table class="table table-striped">
                                <thead>
								<a href="/portaldocument/create" class="btn btn-primary btn-inversed btn-small"><i class="fa fa-eur"></i> Create</a>
                                    <tr>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>File</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
								@foreach ($portaldocument as $document)
                                    <tr>
									
                                        <td>{{ $document->title }}</td>
                                        <td>
                                            {{ $document->description }}
                                        </td>
                                        <td><a target="_self" href="documents/{{$document->file}}">{{$document->file}}</a></td>
                                        
                                        <td>
                                           <a href="/portaldocument/{{ $document->id }}/edit" class="btn btn-primary btn-inversed btn-small"><i class="fa fa-pencil"></i> Edit</a>
                                            <a href="/portaldocument/create" class="btn btn-primary btn-inversed btn-small"><i class="fa fa-eur"></i> Create</a> 
											<form class="" method="post" action="/portaldocument/{{ $document->id }}">  
											<form class="" method="post" action="/portaldocument/{{ $document->id }}">  
					<input type="hidden" name="_method" value="delete">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <a onclick="return Doc_del()">
					<button type="submit" class="btn btn-primary btn-inversed btn-small" name="name" onclick="return Doc_del()" style="width:100px;"><i class="fa fa-ban" aria-hidden="true" ></i>Remove</button></a> 
</form>					
                                           <!--<a href="/portal_documents/{{ $document->id }}" class="btn btn-primary btn-inversed btn-small"><i class="fa fa-ban"></i> Remove</a>
											<input type="hidden" name="_method" value="delete">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <a onclick="return Doc_del()">-->
					
											<!--<button type="submit" name="name" onclick="return Doc_del()" style="background:none; padding:0px; border:none"><i class="fa fa-trash-o fa-fw" aria-hidden="true" style="font-size:20px; color:red"></i></button></a> -->
                                        </td>
                                    </tr>
									
									
									
									
									
									
									
@endforeach
                                    

                                    

                                  
                                   
                                    
                                    
                                </tbody>
								 
                            </table>

                            <div class="center">
                                <ul class="pagination">
                                    {!! $portaldocument->links() !!}
                                </ul>
                            </div>
                        </div><!-- /.block-content-inner -->
						
						
                    </div><!-- /.block-content -->
                </div><!-- /.container -->

<script>
    function Doc_del() {
		var del = confirm("Are you sure you want to delete this ?");
		return del;
	}

	function send_mail() {
		var email = prompt("Enter Email of Concerned Person");
		return email;
	}
</script>
@endsection