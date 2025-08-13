<?php

 //acha o maior valor
 $sql = "SELECT MAX(preco) FROM $nomeDaTabela";
 $resultado = $conexao->query($sql) or die($conexao->error);

 $registro = $resultado->fetch_array();
 $maisCaro = $registro[0];

 //acha qual é o med com o maior valor
 $sql = "SELECT nome_medicamento FROM $nomeDaTabela WHERE preco=$maisCaro";

 $resultado = $conexao->query($sql) or die($conexao->error);

 $registro = $resultado->fetch_array();
 $medicamento = $registro[0];

 echo "<p> Medicamento mais caro: <span> $medicamento </span> <br>
           Valor do medicamento: <span> R$$maisCaro </span> </p>";