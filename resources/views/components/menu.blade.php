
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="public/dist/img/cityhigh/school-logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">GSCNHS</span>
    </a>
    <!-- Sidebar -->
   <!-- Sidebar -->
   <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="info mx-auto">

<a href="#" class="d-block">@yield('teacherName')</a>

      </div>
    </div>


      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search Menu" aria-label="Search Menu">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item " id="master">
            <a href="{{route('home')}}" class="nav-link ">
                <i class="nav-icon fas fa-database"></i>
              <p>
                Master Data
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('teacherv')}}" id="teacher" class="nav-link ">
                    <i class="nav-icon fas fa-chalkboard-teacher"></i>
                    <p>Teacher</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-clock"></i>
                    <p>Office Hours</p>
                </a>
              </li>

            </ul>
          </li>
          <li class="nav-item">
            <a href="{{route('home')}}" id="importC" class="nav-link">
                <i class="nav-icon fas fa-file-import"></i>
              <p>
                Import
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
              <p>
                DTR
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('aboutMe')}}" id='aboutMe' class='nav-link'>
                <i class="nav-icon fas fa-info"></i>
              <p>
                About the System
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('logout')}}" class='nav-link'>
            <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Log out
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->

  </aside>

