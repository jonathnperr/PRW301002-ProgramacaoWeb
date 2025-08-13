<?php
 //operação de cadastro de dados
 $aluno        = $conexao->escape_string(trim($_POST["nome-aluno"]));
 $matricula    = $conexao->escape_string(trim($_POST["matricula"]));

 //cadastro dos dados no banco
 $sql = "INSERT $nomeDaTabela1 VALUES(
            '$matricula',
            '$aluno')";

 $conexao->query($sql) or exit($conexao->error);

 echo "<p> Aluno cadastrado com sucesso! </p>";