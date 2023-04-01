  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-gray bg-gray-dark elevation-4 sidebar-no-expand ">
    <!-- Brand Logo -->
    <a href="{{route('dashboard')}}" class="brand-link">
      <img src="{{asset('img/app/logo.png')}}" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">{{auth()->user()->name}}</span>
    </a>
    
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('img/app/usuario.svg')}}" class="img-circle elevation-2" alt="Us">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ auth()->user()->last_name.', '.auth()->user()->name }}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Buscar" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2 nav-collapse-hide-child">
        <ul class="nav nav-pills nav-sidebar flex-column nav-legacy" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          {{-- <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Starter Pages
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Active Page</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inactive Page</p>
                </a>
              </li>
            </ul>
          </li> --}}
          <li class="nav-item">
            <a href="{{route('dashboard')}}" class="nav-link {{request()->routeIs('dashboard') ? 'active' : ''}}">
              <i class="fa-solid fa-house"></i>
              <p>
                Home
                {{-- <span class="right badge badge-danger">New</span> --}}
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('property.index')}}" class="nav-link {{request()->routeIs('property.index') ? 'active' : ''}}">
              <i class="fa-solid fa-building-user"></i>
              <p>
                Propiedades
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('seller.index')}}" class="nav-link {{request()->routeIs('seller.index') ? 'active' : ''}}">
              <i class="fa-solid fa-user-tie"></i>
              <p>
                Vendedores
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('team.index')}}" class="nav-link {{request()->routeIs('team.index') ? 'active' : ''}}">
              <i class="fa-solid fa-briefcase"></i>
              <p>
                Empresas
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>