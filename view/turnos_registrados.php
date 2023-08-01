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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <title>TURNOS REGISTRADOS</title>
  </head>
  <body class="bg-info">
  <nav class="navbar navbar-expand navbar-light bg-light">
      <div class="nav navbar-nav">
          <a class="nav-item nav-link active" href="#"> <img src="../images/axon_logo.png" alt="" width="30"> PROYECTO<span class="visually-hidden">(current)</span></a>
          <a class="nav-item nav-link" href="../view/turnos_registrados.php"><i class="fas fa-file-alt"></i> Registros</a>
          <a class="nav-item nav-link" href="../view/administrar_personas.php"><i class="fas fa-users"></i> Personas</a>
          <a class="nav-item nav-link" href="cerrar.php"><i class="fas fa-sign-out-alt"></i> CERRAR SESION</a>
          <!--<a class="nav-item nav-link" href="../view/turnos_registrados.php"><i class="fas fa-file-alt"></i> Registros</a>
          <a class="nav-item nav-link" href="../view/administrar_personas.php"><i class="fas fa-users"></i> Personas</a> -->
      </div>
  </nav>
    <div class="container">

    <div class="row">

    <div class="col-md-12 mt-5">

    

     <h1 class="text-center"><i class="fas fa-file-alt"></i> TURNOS REGISTRADOS</h1>

     <hr style="height: 1px;color: black;background-color: black; ">





    </div> 




    </div>

<div class="row">

<div class="col-md-12">

<table class="table">

<thead class="table-primary">

<tr>

<th>ID</th>
<th>NOMBRE</th>

<th>FOTO</th>
<th>FECHA</th>
<th>HORA</th>
<!--<th>OBSERVACIONES</th>-->
<th>ACCION</th>

</tr>

</thead>

<tbody class="table-info">
<?php 

include '../model/Model_Turnos.php';
$model = new Model_Turnos();
$rows = $model->verTurnosRegistrados();
$i=1;
if (!empty($rows)) {
    foreach($rows as $row){


?>
<tr>

<td><?php echo $row['id'];?></td>
<td><?php echo $row['nombre']; ?></td>


<td><img src="<?php echo  $row['foto'];?>" alt="" width="100" ></td>

<td><?php echo $row['fecha']; ?></td>
<td><?php echo $row['hora']; ?></td>
<!--<td><?php //echo $row['observaciones']; ?></td>-->

<td><a href="ver_turno.php?id=<?php echo $row['id'];?>" class="badge bg-primary"><h6><i class="fas fa-search"></i> VER DETALLE</h6></a></td>

</tr>


<?php 

   }

}else{
    echo "NO DATA";
}

?>

</tbody>

</table>

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