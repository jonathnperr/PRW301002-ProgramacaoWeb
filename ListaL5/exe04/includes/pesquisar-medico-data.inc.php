<?php
 $medico         = trim($conexao->escape_string($_POST['pesquisa-nome-data']));
 $dataPesquisada = trim($conexao->escape_string($_POST['pesquisa-data']));

 $sql = "SELECT crm FROM $nomeDaTabela1 WHERE nome = '$medico'";
 $resultado = $conexao->query($sql) or die($conexao->error);
 
 if($conexao->affected_rows == 0)
  {
  exit("<p> Caro usuário, o nome do médico pesquisado não se encontra em nosso banco de dados. Tente novamente! </p>");
  }

 $vetorRegistro = $resultado->fetch_array();
 $crmEncontrado = $vetorRegistro[0];

 //após o PHP receber o crm do médico pesquisado, buscamos, no banco de dados, na tabela pacientes, o crm deste médico e verificamos se os pacientes atendidos por este médico foram internados APÓS a data pesquisada
 $sql = "SELECT nome, data_internacao FROM $nomeDaTabela2 WHERE crm_medico = '$crmEncontrado' AND data_internacao > '$dataPesquisada'";

 $resultado = $conexao->query($sql) or die($conexao->error);

 //antes de tabular os dados, vamos testar se a consulta retornou algum registro
 if($conexao->affected_rows == 0)
  {
  exit("<p> Caro usuário, utilizando os parâmetros de pesquisa fornecidos, não encontramos nenhum registro no banco de dados. Tente novamente! </p>");
  }

  $vetorData = explode("-", $dataPesquisada);
  $dataFormatada = $vetorData[2] . "/" . $vetorData[1] . "/" . $vetorData[0];

  echo "<table>
         <caption> Relação de dados dos pacientes atendidos pelo médico <span> $medico </span>, após a data de internação relativa ao dia <span> $dataFormatada </span> </caption>
         <tr>
          <th> Nome do paciente </th>
          <th> Data da internação </th>
         </tr>";

 while($vetorRegistro = $resultado->fetch_array())
  {
  $nomePaciente = htmlentities($vetorRegistro[0], ENT_QUOTES, "utf-8");
  $dataInternacao = htmlentities($vetorRegistro[1], ENT_QUOTES, "utf-8");

  //neste ponto, a data recebida do banco de dados não está no padrão brasileiro. Vamos usar o recurso de vetores para modificar o padrão da data
  $vetorData = explode("-", $dataInternacao);
  $dataFormatada = $vetorData[2] . "/" . $vetorData[1] . "/" . $vetorData[0];
  echo "<tr>
         <td> $nomePaciente </td>
         <td> $dataFormatada </td>
        </tr>";
  }

 echo "</table>";

 


 