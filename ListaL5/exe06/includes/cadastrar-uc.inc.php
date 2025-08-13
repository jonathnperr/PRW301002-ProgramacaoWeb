<?php
 //operação de cadastro de dados
 $uc    = $conexao->escape_string(trim($_POST["nome-uc"]));
 $matricula        = $conexao->escape_string(trim($_POST["matricula-uc"]));

 //cadastro dos dados no banco
 $sql = "INSERT $nomeDaTabela2 VALUES(
            null,
            '$uc',
            '$matricula')";

 $conexao->query($sql) or exit($conexao->error);

 echo "<p> UC cadastrada com sucesso! </p>";