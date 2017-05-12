<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <!-- search form (Optional) -->
       <form action="search" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
	  
	  <!-- Sidebar Menu -->
     <ul class="sidebar-menu">
        <li class="header">ADMIN NAVIGATION</li>
        <!-- Optionally, you can add icons to the links -->
		<li {{{ (Request::is('admin') ? 'class=active' : '') }}}><a href="/admin"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
		
        <li {{{ (Request::is('user') ? 'class=active' : '') }}}><a href="/admin/user"><i class="fa fa-user"></i> <span>User Management</span></a></li>
		
		<li class="treeview"><a href="#"><i class="fa fa-group"></i> <span>Role Management</span>
		<span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
			</a>
			<ul class="treeview-menu">
            <li {{{ (Request::is('role') ? 'class=active' : '') }}}><a href="/admin/role"><i class="glyphicon glyphicon-user"></i>Roles</a></li>
            <li {{{ (Request::is('permission') ? 'class=active' : '') }}}><a href="/admin/permission"><i class="fa fa-key"></i>Permissions</a></li>
          </ul>
        </li>
		<li {{{ (Request::is('document') ? 'class=active' : '') }}}><a href="/admin/document"><i class="fa fa-files-o"></i> <span>Documents</span></a></li>
        <li {{{ (Request::is('sysconfig') ? 'class=active' : '') }}}><a href="/admin/sysconfig"><i class="fa fa-wrench"></i> <span>System configuration</span></a></li>
		<li {{{ (Request::is('plan') ? 'class=active' : '') }}}><a href="/admin/plan"><i class="fa fa-file"></i> <span>Subscription Plans</span></a></li>
		<li {{{ (Request::is('messenger') ? 'class=active' : '') }}}><a href="/admin/messenger"><i class="fa fa-bullhorn"></i> <span>Announcements</span></a></li>
		<li {{{ (Request::is('reports') ? 'class=active' : '') }}}><a href="#"><i class="fa fa-flag" aria-hidden="true"></i> <span>Reports</span></a></li>
		
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Demo [Internal Templates]</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li {{{ (Request::is('demo') ? 'class=active' : '') }}}><a href="/admin/demo">Demo</a></li>
            <li {{{ (Request::is('demotab') ? 'class=active' : '') }}}><a href="/admin/demotab">DemoTab</a></li>
          </ul>
        </li>
		
		<li {{{ (Request::is('email') ? 'class=active' : '') }}}><a href="/admin/email"><i class="fa fa-envelope"></i> <span>Email</span></a></li>
		
		<li {{{ (Request::is('image') ? 'class=active' : '') }}}><a href="/admin/image"><i class="fa fa-envelope"></i> <span>Image Management</span></a></li>
		
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>