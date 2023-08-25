<aside class="main-sidebar sidebar-img elevation-4  ">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="assets\imgs\logo.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light text-white">Sistema Barbearia</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info ">
          <a href="#" class=" text-white d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

   
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open ">
            <a href="/" id="home" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt text-white"></i>
              <p class="text-white" >
                Home
              </p>
            </a>
          
          </li>
          @if (Auth::check() && !Auth::user()->hasRole('cliente'))
          <li class="nav-item">
            <a href="/adicionar" id="addHorario" class="nav-link">
              <i class="nav-icon fas fa-edit text-white"></i>
              <p class="text-white">
                Adicionar Horário
              </p>
            </a>

          </li>
      @endif
      @if (Auth::check() && !Auth::user()->hasRole('cliente'))
      <li class="nav-item">
        <a href="/clientes" id="listCliente" class="nav-link">
          <i class="nav-icon fas fa-table text-white"></i>
          <p class="text-white" >
            Listar clientes
          </p>
        </a>
       
      </li>
      @endif
          
          <li class="nav-item">
            <a href="/horario" id="listHorario" class="nav-link">
              <i class="nav-icon far fa-calendar-alt text-white"></i>
              <p class="text-white " >
                Listar Horários
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/logout" id="sair" class="nav-link">
              <i class="nav-icon fas  fa-sign-out-alt text-white"></i>
              <p class="text-white">
                Sair
              </p>
            </a>

        
         
          </li>          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>



