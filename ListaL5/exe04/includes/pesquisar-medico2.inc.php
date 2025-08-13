<?php
$nomeMedico = trim($conexao->escape_string($_POST['pesquisa-nome-medico2']));
$dataInserida = trim($conexao->escape_string($_POST['pesquisa-data']));

//cria consulta para receber o nome do medico
$sql = "SELECT crm FROM $nomeDaTabela1 WHERE nome_medico = '$nomeMedico'";
$resultado = $conexao->query($sql) or exit($conexao->error);

if($conexao->affected_rows == 0)
{
    echo "<p> Nome do médico não encontrado </p>";
}
else
{
    //resgata o crm do medico pesquisado 
    $registro = $resultado->fetch_array();
    $crmRetornado = htmlentities($registro[0], ENT_QUOTES, "UTF-8");

    //criando a ultima parte da consulta na tabela pacientes, buscando todos os pacientes atendidos por esse crm
    $sql = "SELECT * FROM $nomeDaTabela2 WHERE crm_medico = '$crmRetornado' AND data_internacao > '$dataInserida'";
    $resultado = $conexao->query($sql) or exit($conexao->error); 

    //caso todos os pacientes foram internados antes da data ou o medico nao esta cuidando de nenhum paciente:
    if($conexao->affected_rows == 0)
    {
        echo "<p> Nenhum paciente atende os requisitos da consulta. Tente mudar os parâmetros da pesquisa.</p>";
    }
    else
    {
        echo "<table>
                <caption> Relação de pacientes atendidos pelo <span>Dr.(a) $nomeMedico</span>, com data de internação após <span>$dataInserida</span> </caption>
                <tr>
                    <th> ID paciente </th>
                    <th> Paciente </th>
                    <th> Data de internação </th>
                    <th> CRM do médico </th>
                </th>";

        while($registro = $resultado->fetch_array())
        {
            $id = htmlentities($registro[0], ENT_QUOTES, "UTF-8");
            $paciente = htmlentities($registro[1], ENT_QUOTES, "UTF-8");
            $data = htmlentities($registro[2], ENT_QUOTES, "UTF-8");
            $crm = htmlentities($registro[3], ENT_QUOTES, "UTF-8");

            echo "<tr>
                    <td> $id </td>
                    <td> $paciente </td>
                    <td> $data </td>
                    <td> $crm </td>
                </tr>";
        }
    }
}