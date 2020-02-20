<!DOCTYPE html>
<html>
<head>
	<title>POO</title>
</head>
<body>


<?php

	include("vehiculo.php");

	$mazda = new Coche(); //estado inicial al objeto o instancia

	$pegaso = new Camion();


	echo "El Mazda tiene " . $mazda-> ruedas . " ruedas <br>";

	echo "El Pegaso tiene " . $pegaso-> ruedas . " ruedas <br>";

	//$pegaso -> arrancar();

	//$pegaso -> set_color("Rojo", "Pegaso");

	echo "El Mazda tiene: " . $mazda->get_ruedas() . " ruedas <br>";

	echo "El Pegaso tiene: " . $pegaso->get_ruedas() . " ruedas <br>";

	echo "El Mazda tiene: " . $mazda->get_motor() . " c/c <br>";
?>


</body>
</html>