  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{ asset('adminlte3/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle">
      <span class="brand-text font-weight-light">FS Gudang</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- SidebarSearch Form -->


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Dashboard
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>

          
          <li class="nav-header">Menu Super Admin </li>
              <li class="nav-item">
            <a href="#" class="nav-link @yield('menuSuperadminUser')">
              <i class="nav-icon fas fa-user"></i>
              <p>
                User
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
              <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-list"></i>
              <p>
                Kategori
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
      
              <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-warehouse"></i>
              <p>
                Barang
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
              <li class="nav-header">Admin </li>
            <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-warehouse"></i>
              <p>
                Barang
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>