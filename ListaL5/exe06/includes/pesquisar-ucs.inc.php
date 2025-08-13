<?php
$nomeAluno      = trim($conexao->escape_string($_POST['pesquisa-nome-aluno']));

//cria consulta para receber o nome do medico
$sql = "SELECT matricula FROM $nomeDaTabela1 WHERE aluno = '$nomeAluno'";
$resultado = $conexao->query($sql) or exit($conexao->error);

if($conexao->affected_rows == 0)
{
    echo "<p> Nome do aluno não encontrado. </p>";
}
else
{
    $registro = $resultado->fetch_array();
    $matriculaRetornada = htmlentities($registro[0], ENT_QUOTES, "UTF-8");

    $sql = "SELECT * FROM $nomeDaTabela2 WHERE matricula_aluno = '$matriculaRetornada'";
    $resultado = $conexao->query($sql) or exit($conexao->error); 

    //caso nenhum aluno atenda os requisitos da consulta:
    if($conexao->affected_rows == 0)
    {
        echo "<p> Nenhum aluno atende os requisitos da consulta. Tente mudar os parâmetros da pesquisa.</p>";
    }
    else
    {
        echo "<table>
                <caption> Relação de UCs do aluno(a) <span> $nomeAluno </span> </caption>
                <tr>
                    <th> Cód. UC </th>
                    <th> UC </th>
                    <th> Aluno </th>
                </th>";

        while($registro = $resultado->fetch_array())
        {
            $codigo = htmlentities($registro[0], ENT_QUOTES, "UTF-8");
            $uc     = htmlentities($registro[1], ENT_QUOTES, "UTF-8");
            $matric = htmlentities($registro[2], ENT_QUOTES, "UTF-8");

            echo "<tr>
                    <td> $codigo </td>
                    <td> $uc </td>
                    <td> $matric </td>
                </tr>";
        }
    }
    echo "</table>";
}