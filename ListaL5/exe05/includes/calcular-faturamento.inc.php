<?php
 $sql = "SELECT SUM(preco) FROM $nomeDaTabela";

 $resultado = $conexao->query($sql) or die($conexao->error);

 $registro = $resultado->fetch_array();
 $faturamento = $registro[0];

 $faturamentoFormatado = number_format($faturamento, 2, ",", ".");

 echo "<p> Faturamento total: <span> R$$faturamentoFormatado </span> </p>";