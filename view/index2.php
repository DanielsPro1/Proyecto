<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
<div><button><a href="../model/disconnect.php">desconectar</button></div>	
<div><button><a href="../view/post.php">Publicar</a></button></div>
<?php 
require("../conexion/connect.php");

include("../view/mostrar.php");
?>

<?php
		if(isset($_POST['submit'])){
			require("post.php");
		}
	?>
</body>
</html>

