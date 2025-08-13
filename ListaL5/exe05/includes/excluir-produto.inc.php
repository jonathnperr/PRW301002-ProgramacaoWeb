<?php
 $validade = $conexao->escape_string(trim($_POST['excluir']));

 $sql = "DELETE FROM $nomeDaTabela WHERE validade > '2023-10-01'";

 $conexao->query($sql) or die($conexao->error);

 if($conexao->affected_rows > 0)
  {
  echo "<p> Foram apagados <span> $conexao->affected_rows produtos </span> do banco de dados.</p>";
  }
 else
  {
  echo "<p> Nenhum produto apagado. </p>";
  }

 
