<?php
$id                = $conexao->escape_string(trim($_POST["id"]));
$orcamento         = $conexao->escape_string(trim($_POST["orcamento"]));
$data              = $conexao->escape_string(trim($_POST["data"]));
$horas             = $conexao->escape_string(trim($_POST["horas"]));

$sql = "INSERT $nomeDaTabela VALUES (
               '$id',
               $orcamento,
               '$data',
               $horas
               )";

 $conexao->query($sql) or exit($conexao->error);

 echo "<p> Projeto cadastrado com sucesso! </p>";  