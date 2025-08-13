<?php
$estoqueminimo = $conexao->escape_string(TRIM($_POST['exclui-estoque']));
$sql = "DELETE FROM $nomeDaTabela WHERE estoque < $estoqueminimo";

$conexao->query($sql) or die($conexao->error);

//testa se algum registro foi apagado

if($conexao->affected_rows > 0)
{
    echo "<p> Foram apagados um total de <span> $conexao->affected_rows produtos </span> </p>";
}
else
{
    echo "<p> Nenhum produto apagado </p>";
}