<?php
// faz o link com a página conexão

require_once 'db_connect.php';

if($_POST) {
	// captura as vareaveis degitadas no formulario
	$nomecomputador = $_POST['nomecomputador'];
    $ip             = $_POST['ip'];

	$sql = "insert into computadores (nome, ip) values ('$nomecomputador','$ip')";
	
	$connect->query($sql);
	
	// verificar se deu tudo certo
	 
	if($connect->query($sql)=== true) {
		echo "Dados inseridos com sucesso!";
	} else {
		echo "Erro:".$sql.$connect->connect_error;
	}
	$connect->close();
	
}



?>