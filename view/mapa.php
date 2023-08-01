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
    <link rel="stylesheet" href="../css/style_mapa.css">
    <title>MAPA</title>
  </head>
  <body class="bg bg-success">
     <?php

    include '../model/Model_Turnos.php';
    $model=new Model_Turnos();
    $id = $_REQUEST['id'];
    $row= $model->fetch_single($id);
    if(!empty($row)){

    ?>
    <center>
    <a href="ver_turno.php?id=<?php echo $row['id'];?>" class="badge bg-dark"><h3><i class="fas fa-arrow-circle-left"></i> REGRESAR</h3></a>
     <label for="" class="bg bg-light p-1 m-1"><b><i class="fa-solid fa-user-large"></i> <?php echo $row['nombre']; ?></b></label>
    
    </center>
  

    <table class="table table-bordered border-dark" border="3">
  <thead>
    <tr>
      
      <th scope="col" id="left" class = "table-light"> LATITUD</th>
      <th scope="col" class = "table-light"><h5 id="right" class = "table-light"><?php echo $row['latitud']; ?></h5></th>
      
    </tr>
  </thead>
  <thead>
    <tr>
      
      <th scope="col" id="left" class = "table-light"> LONGITUD</th>
      <th scope="col" class = "table-light"><h5 id="right"><?php echo $row['longitud']; ?></h5></th>
      
    </tr>
  </thead>
  
</table>
<center>
<iframe src="https://www.coordenadas-gps.com/" frameborder="10" width="95%" height="500px" id="iframe"></iframe>
</center>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>





    
   
    
    <?php }else{
        echo "NO DATA";
    } ?>
</div>
</div>
    
    </div>
    <!--<center>
    <a href="mapa.php" class="badge bg-success"><h3><i class="fa-solid fa-map-location-dot"></i> VER MAPA</h3></a>
    </center>-->
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