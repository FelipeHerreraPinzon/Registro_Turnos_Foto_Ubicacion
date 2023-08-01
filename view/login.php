<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="shortcut icon" href="#" />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>LOG IN</title>
  </head>
  <body class="bg-info">
  <nav class="navbar navbar-expand navbar-light bg-light">
  <div class="nav navbar-nav">
          <a class="nav-item nav-link active" href="inicio.php"> <img src="#" alt="" width="30"> PROYECTO<span class="visually-hidden">(current)</span></a>
          <a class="nav-item nav-link" href="registrar_asistencia.php"><i class="fas fa-edit"></i> REGISTRAR</a>
          
          <a class="nav-item nav-link" href="login.php"><i class="fas fa-sign-in-alt"></i> ADMINISTRADOR</a>
          <!--<a class="nav-item nav-link" href="view/administrar_personas.php"><i class="fas fa-users"></i> Personas</a>-->
      </div>
  </nav>
      <br>
      <br>
      <h1 class="text-center"><i class="fas fa-sign-in-alt"></i> INGRESO ADMINISTRADORES</h1>
      <h2 class="text-center"><i class="fas fa-user-tie"></i> PROYECTO </h2>

  <br>
  <br>
  <br>
 

<div class="container">
  <div class="abs-center">
    <form action="../controller/validar.php" class="border p-3 form" method="POST">
      <div class="form-group">
        <label for="email"><i class="fas fa-user"></i> USUARIO</label>
        <input type="text" name="user" id="email" class="form-control" placeholder="INGRESA USUARIO">
      </div>
      <br>
      <div class="form-group">
        <label for="password"><i class="fas fa-key"></i> CONTRASEÑA</label>
        <input type="password" name="password" id="password" class="form-control" placeholder="INGRESA CONTRASEÑA">
      </div>
      <br>
      <button type="submit" name="send" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i> INGRESAR</button>
      
    </form>
    <h6>
      user : admin <br>
      password : claveproyecto
    </h6>
  </div>
</div>


  </div>

    


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>

