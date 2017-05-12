@extends('layouts.admin.template')
@section('content')
<!-- page_title and dscription -->
<?php $page_title = 'Document Management' ?>
<?php $page_description = 'View Document' ?>
<?php $level1 = 'Home' ?>
<?php $divide1 = ' -> ' ?>
<?php $level2 = 'Document Management' ?>
 
 <div class="box box-primary">
            <div class="box-header with-border">
            <h3 class="box-title">View</h3>
	        
            <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
            </div>
            </div>
            <!-- /.box-body -->
            <div class="box-body" style="overflow-x:auto;overflow-y:scroll;">
 <table id="example2" class="table table-bordered table-hover" >

 <thead>
 <tr>

 <th>A</th>
<th>B</th>
<th>C</th>
<th>D</th>
<th>E</th>
<th>F</th>
<th>G</th>
<th>H</th>
<th>I</th>
</tr>
</thead>

@foreach($test as $test1)



<tbody>
<tr>
						
<?php

for($i=0;$i<count($test1);$i++) 
{
	
echo "<td>".$test1[$i]."</td>";

	
}

 

 ?>
 </tr>
 </tbody>

 
	
@endforeach
</table>
  </div>
</div>
@endsection
