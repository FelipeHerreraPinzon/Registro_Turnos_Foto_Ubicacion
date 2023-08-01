<?php
session_start();
error_reporting(0);
$varsesion=$_SESSION['user'];
if ($varsesion==null || $varsesion='') {
  header("location:login.php");
  die();
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="#" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <script src="js/bootstrap.min.js"></script>

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
     <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <title>REGISTRAR PERSONA</title>
  </head>
  <body class="bg-info">
      <div class="container">

      <div class="row">

      
 
        <div class="col-12 mt-5">
        <a href="administrar_personas.php" class="badge bg-dark"><h3><i class="fas fa-arrow-circle-left"></i> REGRESAR</h3></a>
        <h1 class="text-center"><i class="fas fa-user-plus"></i> REGISTRAR NUEVA PERSONA </h1>

        <hr style="height: 1px;color: black; background-color: black">


      </div>
      

      </div>

      <div class="row">

      <div class="col-md-5 mx-auto">

     

      <form action="registrar_persona.php" method="POST" enctype="multipart/form-data">


      <div class="form-group">
      <label for="">NOMBRE</label>
      <input type="text" name="nombre" class="form-control" required>
      </div>

      <br>

      <div class="form-group">
      <label for="">FOTO</label>
      <input type="file" name="foto" class="form-control" required>
      </div>

      <br>

      <div class="form-group">
      <label for="">CELULAR</label>
      <input type="number" name="celular" class="form-control" required>
      </div>

      <br>

      <div class="form-group">
      <label for="">EMAIL</label>
      <input type="text" name="email" class="form-control" required>
      </div>

      <br>

      <div class="form-group">
          <input type="submit" name="crear_persona" value="CREAR PERSONA" class="btn btn-primary">
          


      </div>
     
      
      </form>

      

      <?php
      include '../model/Model_Personas.php';
      $model = new Model_Personas();
      $create = $model->crearPersona();
      ?>

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

