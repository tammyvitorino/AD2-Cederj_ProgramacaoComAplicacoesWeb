$consulta_instituicao = $conexao->query('SELECT idInstituicao FROM Instituicao WHERE inome="'.$nomeinstituicao.'"') or die(mysql_error());

$row = mysqli_fetch_array( $consulta_instituicao );
     echo $row['idInstituicao']; 

// ou

if ($consulta_instituicao->num_rows > 0) {
    // output data of each row
    while($row = $consulta_instituicao->fetch_assoc()) {
        echo "id: " . $row["idInstituicao"]. "<br>";
    }
} else {
    echo "0 results";
}





// Insere Titular 1 do Time 1

// Insere Titular 2 do Time 1
$nome_participante = $_POST['nome_titular2time1'];
$idade_participante = $_POST['idade_titular2time1'];

$insere_participante = "INSERT INTO Participante (idTime, pnome, idade, posicao) VALUES ('$idtime','$nome_participante','$idade_participante', '1')";
$processa_insere_participante = mysqli_query($conexao, $insere_participante);

// Insere Titular 3 do Time 1
$nome_participante = $_POST['nome_titular3time1'];
$idade_participante = $_POST['idade_titular3time1'];

$insere_participante = "INSERT INTO Participante (idTime, pnome, idade, posicao) VALUES ('$idtime','$nome_participante','$idade_participante', '1')";
$processa_insere_participante = mysqli_query($conexao, $insere_participante);

// Insere Reserva do Time 1
$nome_participante= $_POST['nome_reservatime1'];
$idade_participante = $_POST['idade_reservatime1'];

$insere_participante = "INSERT INTO Participante (idTime, pnome, idade, posicao) VALUES ('$idtime','$nome_participante','$idade_participante', '0')";
$processa_insere_participante = mysqli_query($conexao, $insere_participante);
?>


	$conexao = mysqli_connect("localhost","root","","ad2aplicacoesweb");