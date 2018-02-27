<?php 

	session_start();

	unset($_SESSION['usuario']);
	unset($_SESSION['email']);

	// echo "Esperamos você de volta em breve";

	if (!isset($_SESSION['usuario'])) {

		header('Location: index.php?logout');

	}

 ?>