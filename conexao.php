<?php
	$hostname = "localhost";
	$user = "root";
	$password = "";
	$database = "ad2aplicacoesweb";
	
	//Cria conexão
	$conexao = mysqli_connect("localhost","root","","ad2aplicacoesweb");
	
	
	//Checa conexão
	if(!$conexao) {
		echo "Falha na conexão com o banco de dados";
	}
?>