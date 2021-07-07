<!DOCTYPE html >
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<meta charset=utf-8" />
<title>Olimpíadas de Programação 2019 - Inscrição</title>
</head>
<body>
<div><h2>Inscrição</h2></div>
<form action="processa.php" method="post">


<!-- instituição de ensino -->
<center>
<table width="540" border="0" class="inscreve-tabela">
  <tr><td colspan="4" class="rotulo-tabela"><h3>Instituição de Ensino</h3></td></tr>
  <tr>
    <td width="20" >&nbsp;</td>
    <td width="286" >Nome da instituição: </td>
    <td width="197"><input name="nomeinstituicao" type="text" size="30" required /></td>
    <td width="20">&nbsp;</td></tr>
  <tr>
    <td width="20" height="79">&nbsp;</td>
    <td width="286">Cidade: </td>
    <td><input name="cidadeinstituicao" type="text" size="30" required /></td>
    <td>&nbsp;</td></tr>
<tr><td colspan="4" class="rotulo-tabela"></td></tr>
</table>
</center>

<!-- times -->
<center>
<table width="540" border="0" class="inscreve-tabela">
  <tr><td colspan="4" class="rotulo-tabela"><h3>Time 1</h3></td></tr>
  <tr>
    <td width="20" >&nbsp;</td>
    <td width="286" >Nome do time: </td>
    <td width="197"><input name="nometime1" type="text" size="30" required/></td>
    <td width="20">&nbsp;</td></tr>
  <tr>
    <td width="20">&nbsp;</td>
    <td width="286">Pontuação: </td>
    <td><input name="pontuacaotime1" type="number" size="30" required/></td>
    <td>&nbsp;</td></tr>
  <tr>
    <td height="10" colspan="4" class="rotulo-tabela"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Nome jogador 1: </td>
    <td><input name="nome_jogador1time1" type="text" size="30" required /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Idade jogador 1: </td>
    <td><input name="idade_jogador1time1" type="number" size="30" max="99" required /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="25" colspan="4" class="rotulo-tabela"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Nome jogador 2: </td>
    <td><input name="nome_jogador2time1" type="text" size="30" required/></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Idade jogador 2: </td>
    <td><input name="idade_jogador2time1" type="number" max="99" size="30" required/></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="10" colspan="4" class="rotulo-tabela"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Nome jogador 3: </td>
    <td><input name="nome_jogador3time1" type="text" size="30" required/></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Idade jogador 3: </td>
    <td><input name="idade_jogador3time1" type="number" max="99" size="30" required /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="25" colspan="4" class="rotulo-tabela"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Nome jogador4: </td>
    <td><input name="nome_jogador4time1" type="text" size="30" required/></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Idade jogador4: </td>
    <td><input name="idade_jogador4time1" type="number" max="100" size="30" required/></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="25" colspan="4" class="rotulo-tabela"></td>
  </tr>
  <tr>
    <td colspan="4" class="rotulo-tabela"><h3>Time 2</h3></td>
  </tr>
  <tr>
    <td >&nbsp;</td>
    <td >Nome do time: </td>
    <td><input name="nometime2" type="text" size="30" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Pontuação: </td>
    <td><input name="pontuacaotime2" type="number" size="30" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="10" colspan="4" class="rotulo-tabela"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Nome jogador 1: </td>
    <td><input name="nome_jogador1time2" type="text" size="30" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Idade jogador 1: </td>
    <td><input name="idade_jogador1time2" type="number" size="30" max="99" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="25" colspan="4" class="rotulo-tabela"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Nome jogador 2: </td>
    <td><input name="nome_jogador2time2" type="text" size="30" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Idade jogador 2: </td>
    <td><input name="idade_jogador2time2" type="number" max="99" size="30" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="10" colspan="4" class="rotulo-tabela"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Nome jogador 3: </td>
    <td><input name="nome_jogador3time2" type="text" size="30" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Idade jogador 3: </td>
    <td><input name="idade_jogador3time2" type="number" max="99" size="30" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="25" colspan="4" class="rotulo-tabela"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Nome jogador4: </td>
    <td><input name="nome_jogador4time2" type="text" size="30" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Idade jogador4: </td>
    <td><input name="idade_jogador4time2" type="number" max="100" size="30" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="25" colspan="4" class="rotulo-tabela"></td>
  </tr>
  <tr>
    <td colspan="4" class="rotulo-tabela"><h3>Time 3</h3></td>
  </tr>
  <tr>
    <td >&nbsp;</td>
    <td >Nome do time: </td>
    <td><input name="nometime3" type="text" size="30" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Pontuação: </td>
    <td><input name="pontuacaotime3" type="number" size="30" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="10" colspan="4" class="rotulo-tabela"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Nome jogador 1: </td>
    <td><input name="nome_jogador1time3" type="text" size="30" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Idade jogador 1: </td>
    <td><input name="idade_jogador1time3" type="number" size="30" max="99" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="25" colspan="4" class="rotulo-tabela"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Nome jogador 2: </td>
    <td><input name="nome_jogador2time3" type="text" size="30" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Idade jogador 2: </td>
    <td><input name="idade_jogador2time3" type="number" max="99" size="30" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="10" colspan="4" class="rotulo-tabela"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Nome jogador 3: </td>
    <td><input name="nome_jogador3time3" type="text" size="30" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Idade jogador 3: </td>
    <td><input name="idade_jogador3time3" type="number" max="99" size="30" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="25" colspan="4" class="rotulo-tabela"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Nome jogador4: </td>
    <td><input name="nome_jogador4time3" type="text" size="30" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Idade jogador4: </td>
    <td><input name="idade_jogador4time3" type="number" max="100" size="30" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="25" colspan="4" class="rotulo-tabela"></td>
  </tr>
  <tr><td height="25" colspan="4" class="rotulo-tabela"></td></tr>
</table>
</center>
<center>
<input name="submeter" type="submit" value="Inscrever" />
</center>
</form>
</body>
</html>