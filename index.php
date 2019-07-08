<!DOCTYPE html>


<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<aside>
<div><button> <a href="view/login.php">Iniciar sesion </button></div>
<div> <button> <a href="view/register.php">Registrar</button></div> </aside>


</body>

<?php 
  require("conexion/connect.php");
  
?>
<?php 
include("view/mostrar.php");
?>
</html>
