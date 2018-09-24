<!DOCTYPE html>
<html>
<head>
	<title>Nuestro Primer Programa</title>
</head>
<body>
	 <center>
		<h1><?php echo "Formulario" ?></h1>
		<form action="mostras.php" method="post">
        <input type="text" name="nombre" placeholder="Nombre"><br>
        <input type="text" name="apellido" placeholder="Apellido"><br>
        <input type="text" name="correo" placeholder="Correo"><br>
        <button>Guardar</button>   
</form>


	</center>
</body>
</html>