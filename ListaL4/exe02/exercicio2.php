<?php
 //declaração da função
 function testarIdade()
  {
    $idade = $_POST['idade'];
    $valorTestado = filter_var($idade, FILTER_VALIDATE_INT)

    if($valorTestado === false OR $valorTestado < 0)
    {
      exit("<p> A idade deve ser um inteiro maior ou igual a zero. </p>");
    }
    else
    {
      return $idade;
    }
  }

  function testarVoto($idade)
  {
    if($idade >= 16)
    {
      echo "<p> A pessoa está apta a votar. </p>";
    }
    else
    {
      echo "<p> A pessoa NÃO está apta a votar. </p>";
    }
  }

?>
<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Modularização de código em PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body> 
 <h1> Lista L4: exercício 2 - Verificação idade para votar </h1>

 <form action="exercicio2.php" method="post">
  <fieldset>
   <legend> Validação de campos numéricos </legend>

   <label class="alinha"> Idade: </label>
   <input type="text" name="idade" autofocus> <br>

  <button name="enviar-dados"> Submit </button>
 </form>

 <?php

  if(isset($_POST['enviar-dados']))
   {
   //script principal

   $idade = testarIdade();

   testarVoto($idade);

   }  
 ?> 
</body> 
</html> 