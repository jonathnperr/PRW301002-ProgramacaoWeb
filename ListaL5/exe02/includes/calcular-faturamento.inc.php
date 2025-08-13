<?php

// calcular o faturamento dos produtos nao-perecíveis

$sql = "SELECT SUM(preco*estoque) FROM $nomeDaTabela WHERE classificacao = 'Não-perecível'";

$resultado = $conexao->query($sql) or exit($conexao->error);

$registro = $resultado->fetch_array();
$faturamento = $registro[0];

$faturamentoformatado = number_format($faturamento, 2, ",", ".");

echo "<p> Faturamento total com a venda dos produtos não-perecíveis: <span> R$$faturamentoformatado </span>";