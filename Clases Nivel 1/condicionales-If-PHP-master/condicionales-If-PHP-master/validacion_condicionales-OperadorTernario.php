<style>
	h1{
		text-align:center;
	}

	table{
		background-color:#FFC;
		padding:5px;
		border:#666 5px solid;
	}
	
	.no_validado{
		font-size:18px;
		color:#F00;
		font-weight:bold;
	}
	
	.validado{
		font-size:18px;
		color:#0C3;
		font-weight:bold;
	}


</style>


<?php

	if(isset($_POST["enviando"])){

		$contra=$_POST["contra"];
		$nombre=$_POST["nombre_usuario"];

/*
		if($edad<=18){
			echo "eres mejor de edad. No tienes acceso";
		}
		else{
			echo "Eres mayor de edad. Puedes acceder";
		}

	}
*/	

/*
	$resultado = $edad<18 ? "Eres menor de edad. No puedes acceder" : "Eres mayor de edad. Puedes acceder";
	echo $resultado;

*/
	$resultado= $nombre == "Israel" && $contra == "12345" ? "Puedes acceder" : "Datos incorrectos";
	echo $resultado;
}
?>