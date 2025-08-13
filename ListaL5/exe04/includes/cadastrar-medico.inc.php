<?php
 //operação de cadastro de dados
 $medico        = $conexao->escape_string(trim($_POST["nome-medico"]));
 $crm           = $conexao->escape_string(trim($_POST["crm"]));

 //cadastro dos dados no banco
 $sql = "INSERT $nomeDaTabela1 VALUES(
            '$crm',
            '$medico')";

 $conexao->query($sql) or exit($conexao->error);

 echo "<p> Médico cadastrados com sucesso! </p>";