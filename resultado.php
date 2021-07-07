<html>
<head>
<title>Resultado da Competição</title>
<style type="text/css">
    body { font-family:Verdana, Geneva, sans-serif; margin-top:150px;}
	h1{	color: #ffb400;	text-transform: uppercase; text-align:center; }
    h2 {text-align:center;}
  </style>
</head>
<body>
<?php 	
	//Cria conexão
	$conexao = mysqli_connect("localhost","root","", "ad2aplicacoesweb");
	
	//Testa conexão
	if(!$conexao) {
		echo "Falha na conexão com o banco de dados";
	}

	$consulta_resultado = $conexao->query('SELECT tnome FROM Time WHERE tpontuacao in (select max(tpontuacao) from time)') 
						  or die(mysql_error());
	
	if ($consulta_resultado->num_rows > 0) {
		echo "<h1>Time(s) Vencedor(es):</h1>";
		// output data of each row
		while($row = $consulta_resultado->fetch_assoc()) {
			echo "<h2>".$row["tnome"]. "<br></h2>";
		}
	} else {
		echo "<h2>Sem resultados</h2>";
	}
?>
</body>
</html>