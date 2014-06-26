<?php

include_once "include/conexion.php";

$resultado = mysqli_query($enlace,'CALL spObtenerCategrias();');
if (!$resultado) {
    die('No se pudo consultar:' . mysqli_error());
}

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Shopping Center</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
	<div class="header" id="header">
		<div class="logo" id="logo">
			<h1>Shopping Center</h1>
		</div>
		<div class="navbar navbar-inverse">
			<div class="navbar-inner" id="menu">
				<a class="brand" href="#">Categorias</a>
				<?php
				echo '<ul class="nav">';
				while ($fila = mysqli_fetch_array($resultado)){   
      				echo '<li><a href="#">'.$fila[0].'</a></li>';
  				}
				echo '</ul>';
				?>
		</div>
		</div>
	</div>
	<div class="content" id="content">Contenido</div>
	<div class="footer" id="footer">
		<ul class="nav">	
			<li>
				<blockquote>
					<pre>Direccion: Av. Independencia 501 - San Telmo</pre>
				</blockquote>		
			</li>
			<li>
				<blockquote>
					<pre>Telefono: 4300-9621</pre>
				</blockquote>
			</li>
			<li>
				<blockquote>
					<pre>Horario: Lunes a Domingos de 10:00 a 22:00</pre>
				<blockquote>
			</li>
			
		</ul>
	</div>
</body>
</html>
<?php

mysqli_close($enlace);
		
?>