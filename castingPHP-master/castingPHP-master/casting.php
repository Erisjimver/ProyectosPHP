<!DOCTYPE html>
<html>
<head>
	<title>Funciones y Casting</title>
</head>
<body>

	<?php

		$num1="5.5289894";
		$num2=rand(10,50);
		$num3=pow(5,3);
		$num4="5";

		echo "El numero es: " . round($num1,2) . "</br>";
		echo "El numero es: " . $num2 . "</br>";
		echo "El numero es: " . $num3 . "</br>";

		$resultado=(int)$num1;



	?>

</body>
</html>