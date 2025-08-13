<?php
 //declaração da função
 function testarNome($nome, $nota1, $nota2)
  {

  //vamos aos comandos de validação do nome - sempre que voc~e receber dados de uma caixa de texto, mande o PHP eliminar os espaços em branco antes do primeiro caracter válido e após o último caracter válido
  $nome = trim($nome);

  //por fim, após eliminarmos todos os espaços em branco inválidos, testamos se o nome resta vazio
  $estaVazio = empty($nome);

  //pode fazer pela função strlen e depois testar se é == 0, se for, então está vazia

  if($estaVazio)
   {
   exit("<p> O campo nome deve ser preenchido. </p>");
   }

  //vamos validar os dois campos numéricos
  $nota1 = filter_var($nota1, FILTER_VALIDATE_FLOAT);
  $nota2 = filter_var($nota2, FILTER_VALIDATE_FLOAT);

  //a função filter_var() retorna dois valores possíveis. No caso de um dado errado, ela retorna false. Se o valor testado está correto, ela retorna o próprio valor
  //ATENÇÃO: CUIDADO COM A COMPARAÇÃO DO VALOR DE UMA VARÍAVEL EM RELAÇÃO AO FALSO. PARA EVITARMOS AS "ARMADILHAS" DO PHP EM RELAÇÃO AO ZERO, SEMPRE USAREMOS, DAQUI POR DIANTE, O OPERADOR DE IDENTIDADE (===)

  if($nota1 === false OR $nota2 === false OR $nota1 < 0 OR $nota2 < 0 || $nota1 > 10 OR $nota2 > 10)
   {
   exit("<p> O valor fornecido fornecido para a nota do aluno está incorreto. Aplicação encerrada! </p>");
   }
  }

  //==========================================================================

  function calcularMedia($n1, $n2)
   {
   $media = ($n1 + $n2) / 2;
   return $media; 
   }

  //=========================================================================

  function testarAPROVADO($aluno, $media)
   {
   if($media >= 6)
    {
    $situacao = "APROVADO";  
    }
   else
    {
    $situacao = "REPROVADO";
    }  
    
    $mediaFormatada = number_format($media, 1, ",", ".");
    echo "<p> Caro aluno <span> $aluno </span>, de acordo com suas notas em PRW, você foi considerado $situacao, com média final igual a <span> $mediaFormatada </span> </p>";
   }
?>