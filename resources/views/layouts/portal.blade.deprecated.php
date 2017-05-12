<!doctype html>
<html>
<head>
    @include('includes_portal.head')
</head>
<body>


    <header class="row">
        @include('includes_portal.header')
    </header>
	
	
   
   
   
	
	
	 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
  

    <!-- Main content -->
    

     @yield('content')

    
    <!-- /.content -->
 </div>
           

    

    <footer class="row">
        @include('includes_portal.footer')
    </footer>


</body>
</html>