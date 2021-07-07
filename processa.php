<?php 
$conexao = mysqli_connect("localhost","root","","ad2aplicacoesweb");

// Função inclui instituição
function inclui_instituicao($inome,$icidade){
	global $conexao;
	$insere_instituicao = "INSERT INTO Instituicao (inome, cidade) VALUES ('$inome', '$icidade')";
	$processa_insere_contato = mysqli_query($conexao, $insere_instituicao);
	echo "Instituição: ".$inome." foi inserida.<br>";
	}
	
// Função retorna id Instituicao
function id_instituicao($nome){
	global $conexao;
	$consulta_instituicao = $conexao->query('SELECT idInstituicao FROM Instituicao WHERE inome="'.$nome.'"') or die(mysql_error());
	$processa_consulta_instituicao = mysqli_fetch_array( $consulta_instituicao );
	$idinstituicao = $processa_consulta_instituicao ['idInstituicao'];
	return $idinstituicao;
	}
	
// Função Insere Time
function insereTime($nomeinstituicao, $tnome, $pontuacao){
	global $conexao;
	$id_inst = id_instituicao($nomeinstituicao);
	$insere_time = "INSERT INTO Time (idInstituicao, tnome, tpontuacao) VALUES ('$id_inst','$tnome','$pontuacao')";
	$processa_insere_time = mysqli_query($conexao, $insere_time);
	echo "<br>Time: ".$tnome." foi inserido.<br>";
	}
	
// Função retorna id Time
function id_time($nome){	
	global $conexao;
	$consulta_time = $conexao->query('SELECT idTime FROM Time WHERE tnome="'.$nome.'"') or die(mysql_error());
	$processa_consulta_time = mysqli_fetch_array( $consulta_time );
	$idtime = $processa_consulta_time ['idTime']; 
	return $idtime;
	}
	
// Função insere participante
function insereParticipante($time, $nome, $idade, $posicao){	
	global $conexao;
	$id_time = id_time($time);
	$insere_participante = "INSERT INTO Participante (idTime, pnome, idade, posicao) VALUES ('$id_time','$nome','$idade','$posicao')";
	$processa_insere_tparticipante= mysqli_query($conexao, $insere_participante);
	echo "Participante: ".$nome." foi inserido(a).<br>";
	}

// Verifica Instituição
$nomeinstituicao = $_POST["nomeinstituicao"];
if($nomeinstituicao != ""){
	$cidade = $_POST['cidadeinstituicao'];
	if($cidade != ""){
		$n = 1;	
		while ($n <= 3){
			$getnome = "nometime"."$n";
			$nometime = $_POST[$getnome];
			if ($nometime != "") {
				$getpontuacao = "pontuacaotime"."$n";
				$pontuacaotime = $_POST[$getpontuacao];	
				if ($pontuacaotime != ""){
					$m = 1;
					$jogadores = array();
					$idades = array();
					while ($m <= 4){
						$getjogador = "nome_jogador"."$m"."time"."$n";
						$nomejogador = $_POST[$getjogador];
						if ($nomejogador != ""){
							$getidadejogador = "idade_jogador"."$m"."time"."$n";
							$idadejogador = $_POST[$getidadejogador];
								if($idadejogador != ""){
									$jogadores[$m] = $nomejogador;
									$idades[$m] = $idadejogador;
									}
								else{
									echo "Idade do jogador não pode ser vazia";
									}
							}
						else{
							echo "Nome do jogador não pode ser vazio";
							}	
						$m = $m + 1;	
						}// fim do 2º while
					if ($n == 1){
						inclui_instituicao($nomeinstituicao,$cidade);																		
						}	
					insereTime($nomeinstituicao, $nometime, $pontuacaotime);
					$i = 1;
					while ($i <= 4){
						if ($i != 4){
							$posicao = true;
							insereParticipante($nometime, $jogadores[$i], $idades[$i], $posicao);	
				
							}
						else{
							$posicao = false;
							insereParticipante($nometime, $jogadores[$i], $idades[$i], $posicao);		
							}	
						$i += 1; 				
						}
					}					
				else{
					echo "Precisa cadastrar uma pontuação para o time";
				}		
				}				
			else{
				if ($n == 1){
					echo "A instituição precisa ter pelo menos um time";
					}
			}
			$n = $n + 1;			
		} // fim do 1º while
		}
	else{
		echo "Precisa informar a cidade da Instituição";
		}
	}	
else{
	echo "Nome da instituição não pode ser vazio";
	}

?>