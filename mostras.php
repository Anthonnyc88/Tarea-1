<?php
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$correo = $_POST["correo"]; 
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mostrando Informacion</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<body>
<center>    
        <form action="container">
        
<?php   
echo " Su nombre es: ".$nombre;
echo " Su apellido es: ".$apellido;
echo " Su correo es: ".$correo;
?>
        </form>
</center>

</body>
</html>