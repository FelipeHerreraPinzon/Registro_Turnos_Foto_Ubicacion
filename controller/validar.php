<?php
session_start();
if ($_POST) {
  if (($_POST['user']=="admin") && ($_POST['password']=="claveproyecto")) {
    $_SESSION['user']="admin";
    header("location:../view/turnos_registrados.php");
  }else {
    include '../view/login.php';
    //echo "<script>alert('USUARIO O CLAVE INCORRECTOS')</script>";  
    echo "<script>swal('USUARIO O CONTRASEÑA INCORRECTOS', 'VUELVE A INTENTARLO', 'error');</script>";
  }
}
?>

<?php
/*
if ($_POST) {
  if (($_POST['user']!="admin") && ($_POST['password']!="proyectosds2022")) {
    echo "<script>swal('USUARIO O CONTRASEÑA INCORRECTOS', 'VUELVE A INTENTARLO', 'error');</script>";
  }
  if (($_POST['user']=="admin") && ($_POST['password']!="proyectosds2022")) {
    echo "<script>swal('USUARIO O CONTRASEÑA INCORRECTOS', 'VUELVE A INTENTARLO', 'error');</script>";
  }
  if (($_POST['user']!="admin") && ($_POST['password']=="proyectosds2022")) {
    echo "<script>swal('USUARIO O CONTRASEÑA INCORRECTOS', 'VUELVE A INTENTARLO', 'error');</script>";
  }
  
}
*/
?>