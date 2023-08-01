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

    <title>TURNO</title>
  </head>
  <body>
    

    <div class="container">

    <div class="row">

    <div class="col-md-12 mt-5">

    <!--<h1 class="text-center">PROYECTO CONTEO</h1>-->

    <hr style="height:1px; color:black; background-color: black;">


    </div>
    </div>


<div class="row">


<div class="col-md-5 mx-auto">
    <?php

    include '../model/Model_Personas.php';
    $model=new Model_Personas();
    $id = $_REQUEST['id'];
    $row= $model->fetch_single($id);
    if(!empty($row)){

    


    ?>
    <div class="card">
        <div class="card-header">
         
          <img src="<?php echo $row['foto']; ?>" alt="" width="350">
          
        </div>
        <div class="card-body">

    <!--<p>NOMBRE:        <?php //echo $row['nombre'];    ?></p>-->
    
    
    
    <p><b>NOMBRE:</b> <?php echo $row['nombre']; ?></p>
    
    <p><b>CELULAR:</b> <?php echo $row['celular']; ?></p>
    
    <p><b>EMAIL: </b>         <?php echo $row['email'];  ?></p>
        </div>
        <a href="administrar_personas.php" class="badge bg-dark"><h3><i class="fas fa-arrow-circle-left"></i> REGRESAR</h3></a>
    </div>
    <?php }else{
        echo "NO DATA";
    } ?>
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