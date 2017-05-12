<aside class="main-sidebar">


    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
		
          <img src="{{ asset('images/'.Auth::User()->image) }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>
		    @if(Auth::check())
			{{ Auth::User()->name }}
		    @endif
		  </p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <li class="header">HEADER</li>
        <!-- Optionally, you can add icons to the links -->
		<li><a href="{{ action("UserController@index") }}"><i class="fa fa-user" aria-hidden="true"></i> <span>User Management</span></a></li>
        
		<li><a href="{{("comingsoon") }}"><i class="fa fa-wrench"></i> <span>System Configuration</span></a></li>
		
        
		
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Demo</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
		  
          <ul class="treeview-menu">
		  <li><a href="{{ action("DemoController@index") }}"><i class="fa fa-link"></i><span>Demo </span></a></li>
            <li><a href="{{ action("DemoTabController@index") }}"><i class="fa fa-link"></i><span>DemoTabs</span></a></li>
            
          </ul>
		  
        </li>
		
		
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>
  