<!doctype html>
  <html>
    <head>
      <title>login</title>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        
        <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
    </head>

    <body>
      <!-- Horizontal Form -->
      <div class="container col-sm-4 mt-5">
        <div class="card card-dark">
              <div class="card-header ">
                <div class="row justify-content-center">
                  <img src="assets/imgs/logo.jpg"  class= ""style="width: 10%; height: 10%; border-radius: 30px;"> </div>
                
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" method="POST" action="/register"  >
                @csrf
                <div class="card-body">

                  <div class="form-group row justify-content-center">
                    <label for="inputPassword3" class="col-sm-4 col-form-label justify-content-center row">Nome</label>
                    <div class="col-md-10">
<<<<<<< HEAD
                      <input type="text" name="nome" class="form-control" id="inputPassword3" placeholder="Nome completo...">
=======
                      <input type="text" name="name" class="form-control" id="inputPassword3" placeholder="Nome completo...">
>>>>>>> 22379a44d18fb96fa0538ce92c7bd00bb07f3cd9
                    </div>
                  </div>


                  <div class="form-group row justify-content-center">
                    <label for="inputPassword3" class="col-sm-4 col-form-label justify-content-center row">Telefone</label>
                    <div class="col-md-10">
                      <input type="text" name="telefone" class="form-control" id="inputPassword3" placeholder="telefone">
                    </div>
                  </div>

                  <div class="form-group row justify-content-center">
                    <label for="inputEmail3" class="col-sm-4 col-form-label justify-content-center row ">Email</label>
                    <div class="col-md-10">
                      <input type="email" name="email" class="form-control " id="inputEmail3" placeholder="Email">
                    </div>
                  </div>
                  <div class="form-group row justify-content-center">
                    <label for="inputPassword3" class="col-sm-4 col-form-label justify-content-center row">Senha</label>
                    <div class="col-md-10">
                      <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Senha">
                    </div>
                  </div>


                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-dark">Criar conta</button>

                </div>
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->
             <span class="row justify-content-center">Já possui uma conta? <a href="/login" class="ml-2">Entrar</a></span>
      </div>
    
        
        
   
      
    </body>
  </html>
