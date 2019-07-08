<?php 
include("../view/mostrar.php");
?>
<button><a href="../view/post.php">Publicar</a></button>
<?php
		if(isset($_POST['submit'])){
			require("post.php");
		}
	?>
	
