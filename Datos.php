<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>El Baraton</title>
	<link rel="stylesheet" href="../css/registrarse-a-c/registrase.css">
</head>
<body>
			<center>
				<header>
					<div class="contenedor" id="uno">
						<img class="icon" src="../pictures/inicio/icon1.png">
						<p><a href="../inicio_baraton.html">Inicio</a></p>
					</div>
			
					<div class="contenedor" id="dos">
						<img class="icon" src="../pictures/inicio/icon2.png">
						<p><a href="../nosotros.html">Nosotros</a></p>
					</div>
			
					<div class="contenedor" id="tres">
						<img class="icon" src="../pictures/inicio/icon3.png">
						<p><a href="../producto.html">Productos</a></p>
					</div>
			
					<div class="contenedor" id="cuatro">
						<img class="icon" src="../pictures/inicio/icon4.png">
						<p><a href="../te ayudamos.html">¿Te ayudamos?</a></p>
					</div>
			
					<div class="contenedor" id="cinco">
						<img class="icon" src="../pictures/inicio/icon5.png">
						<p><a href="../ingresar.html">Ingresar</a></p>
					</div>
				</header>
			</center>
<?php

$nom=$_POST['nom'];
$ape=$_POST['ape'];
$num=$_POST['num'];
$email=$_POST['email'];
$pass=$_POST['pass'];

echo "$nom";
echo "<br><br>$ape";
echo "<br><br>$num";
echo "<br><br>$email";
echo "<br><br>$pass";

?>			