<?php

$idBusca = $conexao->escape_string(TRIM($_POST['pesquisa-id']));
$novoPreco = $conexao->escape_string(TRIM($_POST['altera-preco']));

$sql = "UPDATE $nomeDaTabela SET preco=$novoPreco WHERE id='$idBusca'";

$conexao->query($sql) or exit($conexao->error);

echo "<p> Novo preço do produto cadastrado com sucesso. ";