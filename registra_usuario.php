<?php 

	//chama o arquivo para dentro do script
	require_once ('db.class.php');

	//POST está ligado ao atributo name do formulário
	$usuario = $_POST['usuario'];
	
	$email = $_POST['email'];
	
	$senha = $_POST['senha'];

	
	$objDb = new db();
	//variavel $link recebe o return da funcao conecta_mysql()
	$link = $objDb->conecta_mysql();

	$sql = " insert into usuarios(usuario, email, senha) values ('$usuario','$email','$senha') ";

	//executar a query
	if(mysqli_query($link, $sql)){
		echo 'Usuário registrado com sucesso!';
	} else {
		echo 'Erro ao registrar o usuário!';
	}

 ?>