<!DOCTYPE html>
<html>
<head>
	<title>Imagenes servidor</title>
	<style type="text/css">
		
table{
	margin: auto;
	width: 450px;
	border: 2px dotted #FF0000;
}

	</style>
</head>
<body>

	<form action="datos_archivos.php" method="post" enctype="multipart/form-data">


		<table>

			<tr>
				<td><label for="archivo">Imagen: </label></td>
				<td><input type="file" name="archivo" size="200"></td>
			</tr>
			<tr>
				<td colspan="2" style="text-align: center"><input type="submit" name="envie" value="Enviar Archivo"></td>
			</tr>


		</table>


	</form>


</body>
</html>