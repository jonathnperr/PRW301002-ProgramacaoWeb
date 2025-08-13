<?php
//recebendo, do formulário, o nome do médico a ser pesquisado
 $medico    = trim($conexao->escape_string($_POST['pesquisa-medico']));

 //a linha de cima faz a mesma coisa, do ponto de vista da linguagem php, que as três linhas de baixo
 $medico = $_POST['pesquisa-medico'];
 $medico = $conexao->escape_string($medico);
 $medico = trim ($medico);

 //nesta etapa, vamos buscar, na tabela médicos, o crm do médico pesquisado
 $sql = "SELECT crm FROM $nomeDaTabela1 WHERE nome = '$medico'";
 $resultado = $conexao->query($sql) or die($conexao->error);
 
 //testamos, aqui, se o banco de dados encontrou, na tabela médicos, o nome do médico pesquisado
 if($conexao->affected_rows == 0)
  {
  exit("<p> Caro usuário, o nome do médico pesquisado não se encontra em nosso banco de dados. Tente novamente! </p>");
  }

 $vetorRegistro = $resultado->fetch_array();
 $crmEncontrado = $vetorRegistro[0];

 //ao chegar aqui, o nosso código em PHP garante que encontramos, na tabela médicos, o crm do médico pesquisado. Em seguida, criamos uma consulta que vai até a tabela pacientes e usa a chave estrangeira (crm do médico) para contar quantos pacientes são atendidos pelo referido médico
 $sql = "SELECT COUNT(*) FROM $nomeDaTabela2 WHERE crm_medico = '$crmEncontrado'";

 $resultado = $conexao->query($sql) or die($conexao->error);

 $vetorRegistro = $resultado->fetch_array();
 $quantos = $vetorRegistro[0];

 if($quantos == 0)
  {
  echo "<p> O médico pesquisado existe no banco de dados, mas, atualmente, não está atendendo nenhum paciente. </p>";
  }
 else
  {
  echo "<p> O médico pesquisado <span> $medico </span> responde, neste momento, pelo atendimento de <span> $quantos pacientes </span> </p>";
  }
