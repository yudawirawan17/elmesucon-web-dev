      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{url('AdminLTE/dist/img/AdminLTELogo.png') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">

          <a href="{{ route ('admin.dashboard') }}" class="{{ (request()->segment(2) == '') ? 'nav-link active' : 'nav-link inactive' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                
              </p>
            </a>
          </li>

          

          <!-- Produk -->
          <li class="nav-header">Manage Data</li>
          <li class="nav-item">
          <a href="{{ route ('admin.product')}}" class="{{ (request()->segment(2) == 'product') ? 'nav-link active' : 'nav-link inactive' }}">
              <i class="nav-icon fas fa-cubes"></i>
              <p>
                Products
                <span class="badge badge-info right"></span>
              </p>
            </a>
          </li>
          <li class="nav-item">
          <a href="{{ route ('admin.categories')}}" class="{{ (request()->segment(2) == 'category') ? 'nav-link active' : 'nav-link inactive' }}">
              <i class="nav-icon fas fa-tags"></i>
              <p>
                Product Categories
                <span class="badge badge-info right"></span>
              </p>
            </a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="nav-icon fas fa-users"></i>
                <span class="menu-title">Customers</span>
              </a>
            </li>
          <li class="nav-header">Report</li>
          <li class="nav-item">
            <a href="{{ route ('report.transaction')}}" class="{{ (request()->segment(1) == 'transaction') ? 'nav-link active' : 'nav-link inactive' }}">
                <i class="nav-icon fas fa-table"></i>
                <p>
                  Transactions
                  <span class="badge badge-info right">New</span>
                </p>
              </a>
            </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->