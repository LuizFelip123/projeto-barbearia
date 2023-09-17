<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>

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
<body class="hold-transition sidebar-mini layout-fixed ">
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
      <div class="content-header">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
              <h1 class=" mb-4 text-dark">Faça um agendamento</h1>
            </div><!-- /.col -->
         
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      
      <!-- /.content-header -->
     
      <!-- Calendário -->
      <div class="container">
        <form class="form-horizontal">
           <div class="form-group">
            <label class="col-sm-2 control-label mt-3 text-dark">Data</label>
            <div class="col-sm-10">
              <div class="input-group date">
                <input type="text" style="background: #F4F3F2;" class="col-sm-3 rounded border border-dark" class="form-control bord" id="calendario" value="  ">
                <button class="btn btn-outline-primary ml-2 p-2" data-toggle="modal" data-target="#modal-horarios" >horários disponíveis nesta data</button>
              </div>

            </div>
            </div>
      
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
            
            </div>
          </div>
        </form>
      </div>
      <!-- ./calendário-->

      <!--horários disponivéis este mês-->
    
                    <div class="card-body table-responsive p-0 mt-4" style="height: 300px;">

                      
                      <div  class="bg-dark rounded-top mb-0  p-2 mt-4">
                         <h4 class="mb-0 row justify-content-center">Horários deste mês</h4>
                      </div>

      
                      <table class="table table-head-fixed" style="width: 90%;">
                        <thead">
                          <tr>

                            <th  class="text-primary " scope="col" style="margin-left">Data "</th>
                            <th class="text-primary" scope="col">Hora</th>
                            <th class="text-primary" scope="col">Ação</th>
                          
                            
                          </tr>
                        </thead>
                        <tbody class="table-light">
                            @foreach ($datas as $data)
                            <tr scope="row">
                              <td >{{date('d/m/Y', strtotime($data->data))}}</td>
                              <td>@foreach ($data->horarios as $item)
                                <span> @if ($item->user == null)
                                  {{ substr($item->hora, 0, 5); }}  
                                @endif|  </span>
                              @endforeach</td>
                              <th><button  data-toggle="modal" data-target="#modal-horarios{{$data->id}}" class="btn btn-success">reservar</button></th>
                             
                            </tr>
                      


                            <!--modal-->
                            <div class="modal fade" id="modal-horarios{{$data->id}}">
                              <div class="modal-dialog">
                                <div class="modal-content bg-info">
                                  <div class="modal-header">
                                    <h4 class="modal-title">Horarios disponíveis</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                            <form action="/resevar" method="post">
                            @csrf
                            <div class="modal-body">
                
                            <!--horarios-->

                            @foreach ($data->horarios as $item)
                             @if ($item->user == null)
                             <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="horario" id="inlineRadio1" value="{{$item->id}}">
                              <label class="form-check-label" for="inlineRadio1">{{ substr($item->hora, 0, 5); }}</label>
                            </div>    
                             @endif
                          @endforeach
                           
                                <script></script>
                          </div>
                          <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-outline-light" data-dismiss="modal">Fechar</button>
                            <button type="submit" class="btn btn-outline-light">Salvar</button>
                          </div>
                        </form>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                        <!-- /.modal -->
                      <!--./modal-->
                          <!-- /.modal-dialog -->
                        </div>
                        @endforeach
                      
                      </tbody>
                </table>
              </div>
                    <!-- /.card-body -->
            </div>
                  <!-- /.card -->

      <!--./horários disponivéis este mês-->
      <script type="text/javascript">
        $('#calendario').datepicker({  
          format: "dd/mm/yyyy", 
          language: "pt-BR",
          startDate: '+0d'

        });
      </script>
      
      
    
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
    function setActiveClass() {
    var homeElement = document.getElementById('listHorario');
    if (homeElement) {
      homeElement.classList.add("active");
     }
   }
  setActiveClass();

  </script>
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
