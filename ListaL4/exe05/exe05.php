<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Modularização de código em PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body> 
 <h1> Lista L4: exercício 1 - Cálculo de nota </h1>

 <form action="exe05.php" method="post">
  <fieldset>
   <legend> Rendimento semestral do aluno - CTDS - PRW </legend>

   <label class="alinha"> Nome do aluno: </label>
   <input type="text" name="aluno" autofocus> <br>

   <label class="alinha"> Nota1 de PRW: </label>
   <input type="number" name="nota1"  min="0" max="10" step="0.1"> <br>

   <label class="alinha"> Nota2 de PRW: </label>
   <input type="number" name="nota2" min="0" max="10" step="0.1">
  </fieldset>

  <button name="enviar-dados"> Submit </button>
 </form>

 <?php
  //chama as funcoes externas (include)
  include "exe05.inc.php";

  if(isset($_POST['enviar-dados']))
   {
   //script principal
   //invocar a função de teste dos dados do formulário - esta função não terá valor de retorno. Se houver algum erro detectado, a função mostra uma mensagem e encerra a aplicação
  //recebendo os dados do formulário
   $nome = $_POST["aluno"];
   $nota1 = $_POST['nota1'];
   $nota2 = $_POST['nota2'];

   testarNome($nome, $nota1, $nota2);

   //vamos invocar a função que calcula a média do aluno, retornando esta média na variável $mediaRetornada
   $mediaRetornada = calcularMedia($nota1, $nota2);

   //vamos invocar a função que recebe a média e o nome do aluno e mostra se o mesmo foi aprovado ou não
   testarAPROVADO($nome, $mediaRetornada);
   }  
 ?> 
</body> 
</html> 