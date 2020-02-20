<!DOCTYPE html>
<html>
<head>
	<title>Array Asociativo</title>
</head>
<body>

<?php

	$alimentos=array("fruta"=>array("tropical" =>"kiwi",
					 				"citrico"=>"mandarina",
					 				"otros"=>"manzana"),

					"leche"=>array("animal"=>"vaca",
									"vegetal"=>"coco"),

					"carne"=>array("vacuno"=>"lomo",
									"porcino"=>"pata"));

	//echo "El array contiene: " . $alimentos["carne"]["vacuno"];
/*
	foreach($alimentos as $clave_alim=>$alim){

		echo "$clave_alim: <br>";

		while(list($clave,$valor)=each($alim)){

			echo "$clave = $valor <br>";

		}
		echo "<br>";
	}
*/
/*	foreach ($alimentos as $clave_alim=> $alim) {
    echo "$clave_alim: <br>"; 

 
     foreach ($alim as $clave=> $valor) {
      echo "$clave: $valor <br>"; 
  	}
  	echo "<br>";
    }
*/

    echo var_dump($alimentos);

?>

</body>
</html>