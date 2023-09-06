
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
  <script src="assets/js/bootstrap-datepicker.min.js"></script> 
  <script src="assets/js/bootstrap-datepicker.pt-BR.min.js" charset="UTF-8"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/js/bootstrap-timepicker.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

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

          <!--row-->
          <div class="row">
            <!-- /.col (left) -->
          <div class="col-md-6">
             <form action="/salvar" method="post">
              @csrf
              <div class="card card-info ml-2 mt-2">
                <div class="card-header">
                  <h3 class="card-title">Adicione um horário</h3>
                </div>
                <div class="card-body">
               
                  <!-- Date range -->
                  <div class="form-group">
                    <label for="reservation">Data </label>

                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="far fa-calendar-alt" for="reservation"></i>
                        </span>
                      </div>
                      <input type="date" name="data" class="form-control float-right" id="reservation">
                    </div>
                    <!-- /.input group -->
                  </div>
                  <!-- /.form group -->

                  <!-- Date and time range -->
                  <div class="form-group">
                    <label for="reservationtime">Hora</label>

                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text" ><i class="far fa-clock" for="reservationtime"></i></span>
                      </div>
                      <input type="text" class="form-control float-right" name="hora" id="reservationtime">
                    </div>
                    <!-- /.input group -->
                  </div>
                  <!-- /.form group -->

                  <!-- Date and time range -->


                  
                </div>
          </div>
          <div class="card card-info ml-2">
              <div class="card-header">
                <h3 class="card-title">Repetir</h3>
              </div>
              <!--repitir dias da semana-->
              <div class="card-body">
                <div class="row justify-content-center">
                   <label for="seg"  class="ml-2">Seg
                    <input type="checkbox" name="seg"  id="seg" class="ml-2" data-bootstrap-switch>

                   </label>
                   <label for="ter" class="ml-2" >Ter
                    <input type="checkbox"  name="ter" class="ml-2" id="ter" data-bootstrap-switch>

                   </label>
                   <label for="qua" class="ml-2">Qua
                    <input type="checkbox"  name="qua" class="ml-2" id="qua" data-bootstrap-switch>

                   </label>
                   <label for="qui" class="ml-2">Qui
                    <input type="checkbox" name="qui"  id="qui" class="ml-2" data-bootstrap-switch>

                   </label>
                   <label for="sex" class="ml-2">Sex
                    <input type="checkbox"  name="sex"  id="sex" class="ml-2" data-bootstrap-switch>


                   </label>
                   <label for="sab" class="ml-2">Sab
                    <input type="checkbox"  name="sab"  class="ml-2" id="sab" data-bootstrap-switch>


                   </label>
                   <label for="dom" class="ml-2">Dom
                     <input type="checkbox" class="ml-2" name="dom"  id="dom" data-bootstrap-switch>

                   </label>
                </div>
                 
              </div>
              <!--./repitir dias da semana-->

             
              <div class="form-group mt-2 ml-2 ">
                    <div class="input-group">
                      <button type="submit" class="btn btn-info">Adicionar hórario
                        <i class="nav-icon fas fa-edit text-white"></i>
                      </button>
                    </div>
                  </div>
                
            </div>
           
             </form>
          </div><!--./col-->
          

            <!--col-->
            <div class="col-sm-6 mt-2 ">
                  <div class="card card-info">
                  <div class="card-header">
                    <h3 class="card-title">Horários de hoje</h3>

                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                      </button>
                    </div>
                </div>
                <div class="card-body p-0">
                  <table class="table">
                    
                    <tbody>
                      @foreach ($horarios as $horario)
                        
                      <tr>
                        <td>{{ substr($horario->hora, 0, 5); }}</td>
                        
                        <td class="text-right py-0 align-middle">
                          <div class="btn-group btn-group-sm">
                            
                            <a href="/delete/{{$horario->id}}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                          </div>
                        </td>
                      </tr>
                          
                      @endforeach
               

                    </tbody>
                  </table>
                </div>
              
            </div><!--./col-->


           
            
          </div><!--./row-->
            
          

            
            <!-- /.card-body -->
          
          <!-- /.card -->

            <!-- Bootstrap Switch -->

          
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
<!--date picker-->
<script>
  function setActiveClass() {
    var homeElement = document.getElementById('addHorario');
    if (homeElement) {
    homeElement.classList.add("active");
    }
}
setActiveClass();
</script>
<script type="text/javascript">


     flatpickr("#reservationtime", {
            enableTime: true,
            noCalendar: true,
            dateFormat: "H:i",
        });

      

      
</script>



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
