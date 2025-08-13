<?php
 $sql = "CREATE TABLE IF NOT EXISTS $nomeDaTabela(
          id INT PRIMARY KEY AUTO_INCREMENT,
          nome VARCHAR(100),
          estado VARCHAR(50),
          campeao int)";

$conexao->query($sql) or exit($conexao->error); 