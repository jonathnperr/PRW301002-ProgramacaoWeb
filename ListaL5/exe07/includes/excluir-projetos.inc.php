<?php
 $sql = "DELETE FROM $nomeDaTabela WHERE horas < 100 AND orcamento < 1000";
 $conexao->query($sql) or exit($conexao->error);

 if($conexao->affected_rows > 0)
  {
  echo "<p> Foram apagados <span> $conexao->affected_rows projetos </span> do banco de dados.</p>";
  }
 else
  { 
  echo "<p> Nenhum projeto apagado. </p>";
  }
