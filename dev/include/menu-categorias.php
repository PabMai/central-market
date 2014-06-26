<?php

include_once "constantes.php";

?>

<div class="navbar">
	<div class="navbar-inner">
		<a class="brand" href="#">Categorias</a>
		<?php
			// Crea la variable de conexion
			$enlace=mysqli_connect(SERVER, USERNAME, PASSWORD,DATABASE);

			// Valida la conexion a la base de datos
			if (mysqli_connect_errno()) {
					echo 'Error de conexion: ' . mysqli_connect_error();
			}

			$resultadoCategorias = mysqli_query($enlace,"CALL spObtenerCategrias();");
			
			if (!$resultadoCategorias) {
				die('No se pudo consultar categorias:' . mysqli_error());
			}

			echo '<ul class="nav">';
			
			while ($filaCat = mysqli_fetch_array($resultadoCategorias)){   
				echo '<li id="'.$filaCat[0].'"><a href="#">'.$filaCat[0].'</a></li>';
				}

			echo '</ul>';
			mysqli_free_result($resultadoCategorias);
		?>
	</div>
</div>