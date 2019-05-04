<?php
	// include Database connection file 
		include("../../conexion/bd.php");


	// Design initial table header 
	$data = '
<div class="container">   <div class="table-responsive">	
<table class="table table-sm table-bordered table-striped">
						<tr>
							<th>Id</th>
							<th>Codigo</th>
							<th style="width:20%">Descripción</th>
							<th>Tipo</th>
							<th>Fecha Ingreso</th>
							<th>Precio</th>
							
							<th>Eliminar</th>
						</tr>';

	$query = "SELECT * FROM libro";

	if (!$result = mysqli_query($con, $query)) {
        exit(mysqli_error($con));
    }

    // if query results contains rows then featch those rows 
    if(mysqli_num_rows($result) > 0)
    {
    	$number = 1;
    	while($row = mysqli_fetch_assoc($result))
    	{
    		$data .= '<tr>
				
				<td>'.$row['id'].'</td>
				<td>'.$row['codigo'].'</td>
				<td>'.$row['descripcion'].'</td>
				<td>'.$row['tipo'].'</td>
				<td>'.$row['fechaIngreso'].'</td>
				<td>₡ '.number_format($row['precio'], 2).'</td>
			
			
				<td>
					<button onclick="Delete('.$row['id'].')" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
				</td>
    		</tr>';
    		$number++;
    	}
    }
    else
    {
    	// records now found 
    	$data .= '<tr><td colspan="12" class="text-center">No hay registros!</td></tr>';
    }

	$data .= '</table> </div> </div>';

    echo $data;
?>