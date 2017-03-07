
<?php

	$host     = "127.0.0.1";
	$username = "user";
	$password = "pass";
	$database = "_ofertaAcademica";

	$tableUsers  = "usuarios";
	$tableOferta =  "oferta";

	$connection = new mysqli($host, $username, $password, $database);

	if ($connection->connect_errno){
		echo "<div class=\"center\">";
			echo "<p class=\"blackBackground\">Error al intentar abrir la conexión.</p>";
		echo "</div>";
		exit();
	}

?>
