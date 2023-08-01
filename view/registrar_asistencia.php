<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="#" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
     

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <link rel="stylesheet" href="../css/estilo_registrar_asistencia.css">
    
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
    <script src="../GPS/fun_gps.js"></script>
    


    <title>REGISTRAR</title>
  </head>
  <body class="bg-info">

  <nav class="navbar navbar-expand navbar-light bg-light">
  <div class="nav navbar-nav">
          <a class="nav-item nav-link active" href="inicio.php"> <img src="#" alt="" width="30"> SISTEMA<span class="visually-hidden">(current)</span></a>
          <a class="nav-item nav-link" href="registrar_asistencia.php"><i class="fas fa-edit"></i> REGISTRAR</a>
          
          <a class="nav-item nav-link" href="login.php"><i class="fas fa-sign-in-alt"></i> ADMINISTRADOR</a>
          <!--<a class="nav-item nav-link" href="view/turnos_registrados.php"><i class="fas fa-file-alt"></i> Registros</a>
          <a class="nav-item nav-link" href="view/administrar_personas.php"><i class="fas fa-users"></i> Personas</a>-->
      </div>
  </nav>
      

     
      
      

      <?php
      
     
      include '../reloj/reloj.php';
      
      ?>



<center>
<p><button onclick="geoFindMe()" class="btn btn-success pb-1"><h4><i class="fa-solid fa-location-dot"></i> OBTENER MI UBICACIÓN</h4></button></p>  
<div id="out"></div>


</center>

<form action="" method="post" enctype="multipart/form-data">

<input type="hidden" name="latitud" id="latitud" >
<input type="hidden" name="longitud" id="longitud" >

<input type="text" name="nombre" id="input_start" placeholder="INGRESA TU NOMBRE" required>

  
<!--<select name="nombre" id="input_start" required>
    <option value="" disabled selected hidden>SELECCIONA TU NOMBRE</option>
    <option value="Nombre Persona 1">Nombre Persona 1</option>
    <option value="Nombre Persona 2">Nombre Persona 2</option>
    <option value="Nombre Persona 3">Nombre Persona 3</option>
  </select>-->
  <br>
  
  
  <div id="instruccion">
  <h1><i class="fas fa-camera"></i> ADJUNTA EVIDENCIA FOTOGRAFICA</h1>
  </div>
  <br>
  
  
  <input type="file" name="foto" id="input_start">
  <br>
  <input type="text" name="observaciones" id="input_start" placeholder="OBSERVACIONES (OPCIONAL)">
  <br>
  
  <input type="submit" name="registrar" id="btn_iniciar" value="REGISTRAR">

  
  </form>

  <br>
  <br>

      <?php
      include '../model/Model_Turnos.php';
      $model = new Model_Turnos();
      $create = $model->registrarTurno();
      ?>
      
      

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
   
    <footer>
      <img src="#" alt="" id="logo_sds">
    </footer>
  </body>
</html>

