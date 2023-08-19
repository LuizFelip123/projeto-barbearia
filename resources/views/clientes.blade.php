 

  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>
  
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="assets/css/bootstrap-datepicker.css" rel="stylesheet"/>
    <script src="assets/js/bootstrap-datepicker.min.js"></script> 
    <script src="assets/js/bootstrap-datepicker.pt-BR.min.js" charset="UTF-8"></script>
  
    <!--./datepicker-->
  
    
  </head>
  <body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
  
    <!-- Preloader -->
  
  
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white sidebar-img">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
   
   
      </ul>
  
      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
  
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link text-white" data-toggle="dropdown" href="#">
            <i class="far fa-bell text-white"></i>
            <span class="badge badge-warning navbar-badge ">15</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-item dropdown-header">15 Notifications</span>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-envelope mr-2"></i> 4 new messages
              <span class="float-right text-muted text-sm">3 mins</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-users mr-2"></i> 8 friend requests
              <span class="float-right text-muted text-sm">12 hours</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-file mr-2"></i> 3 new reports
              <span class="float-right text-muted text-sm">2 days</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
       
      </ul>
    </nav>
    <!-- /.navbar -->
  
    <!-- Main Sidebar Container -->
    @component('components.sidebar')

   @endcomponent
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Clientes</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Clientes</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
  
      <!-- Main content -->
      <section class="content">
  
        <!-- Default box -->
        <div class="card">
          <div class="card-header">
           Clientes de hoje
  
            <div class="card-tools">
              <button type="button" class="btn btn-tool"  data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>
              
            </div>
          </div>
          <div class="card-body p-0">
            <table class="table table-striped projects">
                <thead>
                    <tr>
                        
                        <th style="width: 20%">
                            Nome
                        </th>
                        <th style="width: 30%">
                            horário agendado
                        </th>
  
                        <th style="width: 30%">
                            email
                        </th>
  
                        <th style="width: 30%">
                            telefone
                        </th>
                        
                        <th style="width: 20%">
                          Ação
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            João
                        </td>
                        <td>
                            <a>
                                8:45
                            </a>
                            <br/>
                            <small>
                                23/08/2023
                            </small>
                        </td>
  
                        <td>
                            João@gmail.com
                        </td>
  
                        <td>
                            75 998721344
                        </td>
                        
                        
                        <td class="project-actions text-right">
                            <a class="btn btn-info btn-sm" href="#">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Reagendar
                            </a>
                            
                        </td>
                    </tr>
                    
                    <tr>
                        <td>
                            João
                        </td>
                        <td>
                            <a>
                                8:45
                            </a>
                            <br/>
                            <small>
                                23/08/2023
                            </small>
                        </td>
  
                        <td>
                            João@gmail.com
                        </td>
  
                        <td>
                            75 998721344
                        </td>
                        
                        
                        <td class="project-actions text-right">
                            <a class="btn btn-info btn-sm" href="#">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Reagendar
                            </a>
                            
                        </td>
                    </tr>
  
                    <tr>
                        <td>
                            João
                        </td>
                        <td>
                            <a>
                                8:45
                            </a>
                            <br/>
                            <small>
                                23/08/2023
                            </small>
                        </td>
  
                        <td>
                            João@gmail.com
                        </td>
  
                        <td>
                            75 998721344
                        </td>
                        
                        
                        <td class="project-actions text-right">
                            <a class="btn btn-info btn-sm" href="#">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Reagendar
                            </a>
                            
                        </td>
                    </tr>
  
                    <tr>
                        <td>
                            João
                        </td>
                        <td>
                            <a>
                                8:45
                            </a>
                            <br/>
                            <small>
                                23/08/2023
                            </small>
                        </td>
  
                        <td>
                            João@gmail.com
                        </td>
  
                        <td>
                            75 998721344
                        </td>
                        
                        
                        <td class="project-actions text-right">
                            <a class="btn btn-info btn-sm" href="#">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Reagendar
                            </a>
                            
                        </td>
                    </tr>
  
  
                    <tr>
                        <td>
                            João
                        </td>
                        <td>
                            <a>
                                8:45
                            </a>
                            <br/>
                            <small>
                                23/08/2023
                            </small>
                        </td>
  
                        <td>
                            João@gmail.com
                        </td>
  
                        <td>
                            75 998721344
                        </td>
                        
                        
                        <td class="project-actions text-right">
                            <a class="btn btn-info btn-sm" href="#">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Reagendar
                            </a>
                            
                        </td>
                    </tr>
  
                    <tr>
                        <td>
                            João
                        </td>
                        <td>
                            <a>
                                8:45
                            </a>
                            <br/>
                            <small>
                                23/08/2023
                            </small>
                        </td>
  
                        <td>
                            João@gmail.com
                        </td>
  
                        <td>
                            75 998721344
                        </td>
                        
                        
                        <td class="project-actions text-right">
                            <a class="btn btn-info btn-sm" href="#">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Reagendar
                            </a>
                            
                        </td>
                    </tr>
                </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
  
      </section>
      <!-- /.content -->
  
      <!-- Main content -->
      <section class="content">
  
        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            Todos os clientes
            
  
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>
              
            </div>
          </div>
          <div class="card-body p-0">
            <table class="table table-striped projects">
                <thead>
                    <tr>
                        
                        <th style="width: 20%">
                            Nome
                        </th>
                        <th style="width: 30%">
                            horário agendado
                        </th>
  
                        <th style="width: 30%">
                            email
                        </th>
  
                        <th style="width: 30%">
                            telefone
                        </th>
                        
                        <th style="width: 20%">
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            João
                        </td>
                        <td>
                            <a>
                                8:45
                            </a>
                            <br/>
                            <small>
                                23/08/2023
                            </small>
                        </td>
  
                        <td>
                            João@gmail.com
                        </td>
  
                        <td>
                            75 998721344
                        </td>
                        
                        
                        <td class="project-actions text-right">
                            <a class="btn btn-info btn-sm" href="#">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Reagendar
                            </a>
                            
                        </td>
                    </tr>
                    
                    <tr>
                        <td>
                            João
                        </td>
                        <td>
                            <a>
                                8:45
                            </a>
                            <br/>
                            <small>
                                23/08/2023
                            </small>
                        </td>
  
                        <td>
                            João@gmail.com
                        </td>
  
                        <td>
                            75 998721344
                        </td>
                        
                        
                        <td class="project-actions text-right">
                            <a class="btn btn-info btn-sm" href="#">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Reagendar
                            </a>
                            
                        </td>
                    </tr>
  
                    <tr>
                        <td>
                            João
                        </td>
                        <td>
                            <a>
                                8:45
                            </a>
                            <br/>
                            <small>
                                23/08/2023
                            </small>
                        </td>
  
                        <td>
                            João@gmail.com
                        </td>
  
                        <td>
                            75 998721344
                        </td>
                        
                        
                        <td class="project-actions text-right">
                            <a class="btn btn-info btn-sm" href="#">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Reagendar
                            </a>
                            
                        </td>
                    </tr>
  
                    <tr>
                        <td>
                            João
                        </td>
                        <td>
                            <a>
                                8:45
                            </a>
                            <br/>
                            <small>
                                23/08/2023
                            </small>
                        </td>
  
                        <td>
                            João@gmail.com
                        </td>
  
                        <td>
                            75 998721344
                        </td>
                        
                        
                        <td class="project-actions text-right">
                            <a class="btn btn-info btn-sm" href="#">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Reagendar
                            </a>
                            
                        </td>
                    </tr>
  
  
                    <tr>
                        <td>
                            João
                        </td>
                        <td>
                            <a>
                                8:45
                            </a>
                            <br/>
                            <small>
                                23/08/2023
                            </small>
                        </td>
  
                        <td>
                            João@gmail.com
                        </td>
  
                        <td>
                            75 998721344
                        </td>
                        
                        
                        <td class="project-actions text-right">
                            <a class="btn btn-info btn-sm" href="#">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Reagendar
                            </a>
                            
                        </td>
                    </tr>
  
                    <tr>
                        <td>
                            João
                        </td>
                        <td>
                            <a>
                                8:45
                            </a>
                            <br/>
                            <small>
                                23/08/2023
                            </small>
                        </td>
  
                        <td>
                            João@gmail.com
                        </td>
  
                        <td>
                            75 998721344
                        </td>
                        
                        
                        <td class="project-actions text-right">
                            <a class="btn btn-info btn-sm" href="#">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Reagendar
                            </a>
                            
                        </td>
                    </tr>
                </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
  
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
   
    <footer class="main-footer">
      <strong>Copyright &copy; 2014-2021 <a href="#">System skill</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.1.0
      </div>
    </footer>
  
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->
  
  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="plugins/moment/moment.min.js"></script>
  <script src="plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="dist/js/adminlte.js"></script>
  
  <script src="dist/js/pages/dashboard.js"></script>
  </body>
  </html>
  