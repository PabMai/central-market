<?php

include_once "constantes.php";

?>

<table class="table table-bordered table-hover span12">
	<thead>
		<tr>
			<th class="span10">Nombre</th>
			<th class="span2">Precio</th>
		</tr>
	</thead>
	<tbody>
		<?php 	
			// Crea la variable de conexion
			$enlace=mysqli_connect(SERVER, USERNAME, PASSWORD,DATABASE);

			// Valida la conexion a la base de datos
			if (mysqli_connect_errno()) {
					echo 'Error de conexion: ' . mysqli_connect_error();
			}

			$resultadoProductos = 
				mysqli_query($enlace,"CALL spObtenerProductos('".$_POST["cat"]."');");

			if (!$resultadoProductos) {
				die('No se pudo consultar productos:' . mysqli_error());
			}
			
				while($filaProd = mysqli_fetch_array($resultadoProductos))
			{
				echo "<tr>";
					echo "<td class='span10'>".$filaProd[0]."</td>";
					echo "<td class='span2'>$".$filaProd[1]."</td>";
					echo "</tr>";
			}
			mysqli_free_result($resultadoProductos);
		?>
	</tbody>
</table>