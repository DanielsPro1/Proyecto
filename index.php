<!DOCTYPE html>


<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<center>
<header>
<h1>proyecto</h1>
</header>
<div class="container">
<main>
<section>
<?php 
  require("conexion/connect.php");
  include("view/mostrar.php");
?>
</section>

</main>

<aside>
<button><a href="view/login.php">Iniciar sesion</button>
<button> <a href="view/register.php">Registrar </button>
</aside>


</div>




</center>


<script src="js/jquery-3.4.1.min.js"> </script>
<script src="js/popper.min.js"> </script>
<script src="js/bootstrap.min.js"></script>



</body>

</html>


