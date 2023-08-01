<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<?php

class Model_Personas{


    private $conn;

    public function __construct(){
        include ('config.php');
        try{
            $this->conn = new mysqli($server, $username, $password, $db);
        } catch (Exception $e) {
            echo "error en la conexion" . $e->getMessage();
        }
    }

    public function crearPersona(){

        if(isset($_POST['crear_persona'])){
            

                    $nombre = $_POST['nombre'];
                    

                    $foto=$_FILES['foto']['name'];
                    $archivo=$_FILES['foto']['tmp_name'];
                    $ruta="../imagenes_personas";
                    $ruta=$ruta."/".$foto;
                    move_uploaded_file($archivo, $ruta);

                    $celular = $_POST['celular'];
                    $email = $_POST['email'];
                   

                    $query = "INSERT INTO personas (nombre, foto, celular, email) 
                              VALUES ('$nombre', '$ruta', '$celular', '$email')";

                    if($sql = $this->conn->query($query)){
                        //echo "<script>alert('REGISTRO EXITOSO')</script>";
                        echo "<script>swal('¡LA PERSONA HA SIDO REGISTRADA!', 'GRACIAS', 'success');</script>";
                        echo "<script>window.location.href = 'administrar_personas.php';</script>";
                    }else{
                        //echo "<script>alert('ERROR AL REGISTRAR')</script>";
                        echo "<script>swal('¡HA OCURRIDO UN ERROR!', 'VUELVE A INTENTARLO', 'error');</script>";
                        echo "<script>window.location.href = 'administrar_personas.php';</script>";
                    }  
            
        }

    }

    public function verPersonas(){
        $data = null;

        $query = "SELECT * FROM personas";
        if ($sql = $this->conn->query($query)){
            while ($row = mysqli_fetch_assoc($sql)){
                $data[] = $row;
            }
        }
  
        return $data;



    }



    public function fetch_single($id){


        $data=null;
        $query= "SELECT * FROM personas WHERE id = '$id'";
        if ($sql = $this->conn->query($query)) {
            while ($row = $sql->fetch_assoc()){
                 $data = $row;
            }
        }
         return $data;
    }

    

    






}






?>