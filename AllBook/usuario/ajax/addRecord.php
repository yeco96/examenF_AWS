<?php

	 require '../clase.php';
    



	if(isset($_POST['codigo']) && isset($_POST['descripcion']) && isset($_POST['tipo']) && isset($_POST['fechaIngreso'])  
		&& isset($_POST['precio']) )
	{

	include("../../conexion/bd.php");

		$libro = new libro($_POST['codigo'], $_POST['descripcion'], $_POST['tipo'], $_POST['fechaIngreso'], $_POST['precio']);

		$query = "INSERT INTO libro(codigo, descripcion, tipo, fechaIngreso, precio) 
		VALUES('".$libro->getCodigo()."', '".$libro->getDescripcion()."', '".$libro->getTipo()."', '".$libro->getFechaIngreso()."', 
		'".$libro->getPrecio()."')";

		if (!$result = mysqli_query($con, $query)) {
	        exit(mysqli_error($con));
	    }

	    echo "Correcto!";
	}else{
		echo "Faltan Datos";
	}
?>