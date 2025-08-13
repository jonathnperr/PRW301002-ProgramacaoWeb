<?php
//pega o produto com menor quantidade em estoque e mostra a descrição, primeiro acha o menor e depois mostra a descrição

 $sql = "SELECT MIN(estoque) FROM $nomeDaTabela";

 $resultado = $conexao->query($sql) or die($conexao->error);

 $registro = $resultado->fetch_array();
 $menorquantiaestoque = $registro[0];

 //acha qual produto tem a menor quantidade em estoque e retorna a descricao

 $sql = "SELECT descricao from $nomeDaTabela WHERE estoque=$menorquantiaestoque";

 $resultado = $conexao->query($sql) or die($conexao->error);

 $registro = $resultado->fetch_array();
 $descricao = $registro[0];

 echo "<p> Descrição do produto com a menor quantidade em estoque: <span> $descricao </span> </p>";