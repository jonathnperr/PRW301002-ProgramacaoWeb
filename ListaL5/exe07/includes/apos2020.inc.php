<?php

$sql = "SELECT COUNT(inicio) FROM $nomeDaTabela WHERE inicio >= '2020/01/01'";
$resultado = $conexao->query($sql);

while($registro = $resultado->fetch_array())
{
   $inicio = $registro[0];
}

if($inicio > 0)
{
    echo "<p> Quantidade de projetos com a data de início posterior ao dia 01/01/2020 é de <span> $inicio </span> </p>";
}
else
{
    echo"<p> Não possuí nenhum projeto cadastrado antes do dia 01/01/2020 </p>";
}

?>