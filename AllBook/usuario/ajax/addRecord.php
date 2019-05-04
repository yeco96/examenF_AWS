<?php

	 require '../clase.php';
    



	if(isset($_POST['id']) && isset($_POST['admin']) && isset($_POST['contrasena']) && isset($_POST['nombre'])  
		)
	{

	include("../../conexion/bd.php");

		$usuario = new usuario($_POST['id'], $_POST['admin'], $_POST['contrasena'], $_POST['nombre']);

		$query = "INSERT INTO usuario(id, admin, contrasena, nombre) 
		VALUES('".$usuario->getId()."', '".$usuario->getAdmin()."', '".$usuario->getContrasena()."', '".$usuario->getNombre()."')";

		if (!$result = mysqli_query($con, $query)) {
	        exit(mysqli_error($con));
	    }

	    echo "Correcto!";
	}else{
		echo "Faltan Datos";
	}
?>