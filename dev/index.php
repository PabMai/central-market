<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Central Market</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<script type="text/javascript" src="js/jquery.js" ></script>
</head>
<body>
	<div class="container">
		<div id="header" class="span12">
			<div class="logo span12" id="logo">
				<h1>Central Market</h1>
			</div>
			<div class="span12" id="menu-categorias">
				<?php 
					include_once "include/menu-categorias.php";
				?>
			</div>		
		</div>
		<div class="span12" id="content">
			<!--Muestra por ajax el resultado de los productos segun su categoria-->
		</div>
		<div class="footer span12" id="footer">
			<ul class="nav">	
				<li class="text-center">
					<strong>Direccion: </strong>Av. Independencia 501 - San Telmo
				</li>
				<li class="text-center">
					<strong>Telefono: </strong>4300-9621
				</li>
				<li class="text-center">
					<strong>Horario: </strong>Lunes a Domingos de 10:00 a 22:00
				</li>	
			</ul>
		</div>
	</div>
	<script type="text/javascript" src="js/menu.js" ></script>
</body>
</html>
<?php

mysqli_close($enlace);
		
?>