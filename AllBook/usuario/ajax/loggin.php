<?php 

   include("../../conexion/bd.php");

// check request
if(isset($_POST['usuario']) && isset($_POST['contrasena']))
{
    
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    
    $query = "SELECT * FROM usuario WHERE id = '$usuario' and contrasena = '$contrasena'";

    if (!$result = mysqli_query($con, $query)) {
        exit(mysqli_error($con));
    }

    $response = array();

    if(mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $response = $row;
        }
        
         session_start();
                    
         $_SESSION["datos-usuario"] = $response;


    }
    else
    {
        $response['status'] = 400;
        $response['message'] = "El Usuario no existe!";
    }
    
    echo json_encode($response);
}
else
{
    $response['status'] = 400;
    $response['message'] = "Faltan parametros!";
}

 ?>