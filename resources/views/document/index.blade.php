@extends('layouts.admin.template')
@section('content')

@if (session('message'))
    <div class="alert alert-success fade in">
       <a href="" class="close" data-dismiss="alert">&times;</a>
       <strong>Success!</strong> {{ Session::get('message') }}
    </div>
@endif

<!-- page_title and dscription -->
<?php $page_title = 'Document Management' ?>
<?php $page_description = 'View Document' ?>
<?php $level1 = 'Home' ?>
<?php $divide1 = ' -> ' ?>
<?php $level2 = 'Document Management' ?>



<!-- /.box-header -->		   
<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">View Document</h3>
<a href="/admin/document/create">
<i class="fa fa-plus-square-o fa-1g" aria-hidden="true"
 style="margin-left:50px; font-size:21px"></i></a>

			<div class="box-tools pull-right">
            <a href="/document/directorylisting">
			<i class="fa fa-folder-open" aria-hidden="true" style="font-size:21px;"></i></a>


            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
            </div>
           </div>

            
            <!-- /.box-body-->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
			  <!-- table-header -->
                <thead>
                <tr>
                  <th>Title</th>
                  <th>Description</th>
				  <th>File</th>
				  <th>Actions</th>
				</tr>
                </thead>
				
				
				<!-- table-body -->
				@foreach ($documents as $document)
				<h2><a href="/document/{{ $document->id }}"></a></h2>
                <tbody>
                <tr>
					<td>{{ $document->title }}</td>
					<td>{{ $document->description }}</td>

					<td>
					<?php
					
				$file =  $document->file ;
				$e = explode(".", $file );
				//echo $e[count($e)-1];
				if($e[count($e)-1]=='xlsx')
				{
					echo "<a href='/admin/document/showexcel/$document->id'>
					{$document->file}</a>";
					
				}
				else 
				{
					echo "<a href='/documents/$file'>
				{$document->file}</a>";
				}
					 
					?>
					</td>
					
				    <td>
		 <form class="" action="/admin/document/{{ $document->id }}" method="post">
					<!-- Edit -->
                    <a href="/admin/document/{{ $document->id }}/edit">
					<i class="fa fa-pencil-square-o fa-fw" aria-hidden="true" 
					style="font-size:20px; color:green"></i></a>
				    <!-- Share -->
					<a href ="/test"><i class="fa fa-share-alt" aria-hidden="true">
					</i></a>
					
					<?php
					
				$file =  $document->file ;
				$e = explode(".", $file );
				if($e[count($e)-1]=='pdf')
				{
				echo "<a href='/admin/document/pdfDownload/$document->id'>
				<i class='fa fa-download' aria-hidden='true' title='Download'>
				</i></a>";
					
				}
				else 
				{
			   echo "<a href='/documents/$file'><i class='fa fa-download' aria-hidden='true' title='Download'>
			   </i></a>";
				}
				?>
					<!-- delete -->
					<input type="hidden" name="_method" value="delete">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <a onclick="return Doc_del()">
					<button type="submit" name="name" onclick="return Doc_del()"
					style="background:none; padding:0px; border:none">
					<i class="fa fa-trash-o fa-fw" aria-hidden="true" 
					style="font-size:20px; color:red"></i></button>
					</a>  
					</form>
					</td>
				</tr>
				</tbody>
				@endforeach
				</table>
				{!! $documents->links() !!}
            </div>
        </div>
<script>
    function Doc_del() {
		var del = confirm("Are you sure you want to delete this ?");
		return del;
	}
</script> 

<script>
	function send_mail() {
		var email = prompt("Enter Email of Concerned Person");
		return email;
	}
</script>
@endsection