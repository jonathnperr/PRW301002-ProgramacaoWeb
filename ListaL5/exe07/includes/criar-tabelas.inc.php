<?php
 $sql = "CREATE TABLE IF NOT EXISTS $nomeDaTabela(
          id VARCHAR(3) PRIMARY KEY,
          orcamento int,
          inicio date,
          horas int)";

$conexao->query($sql) or exit($conexao->error); 