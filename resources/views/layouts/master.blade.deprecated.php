<!doctype html>
<html>
<head>
    @include('layouts.admin.head')
</head>
<body>


    <header>
        @include('layouts.admin.header')
    </header>
	
	
   
   
   <aside>
        @include('layouts.admin.sidebar')
    </aside>
	
	
	 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      
     @yield('content')
    </section>

    <!-- Main content -->
    
    <!-- /.content -->
  </div>
           

    

    <footer>
        @include('layouts.admin.footer')
    </footer>


</body>
</html>