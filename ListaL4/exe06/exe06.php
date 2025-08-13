<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Modularização de código em PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body> 
 <h1> Lista L4: exercício 2 - Verificação idade para votar </h1>

 <form action="exe06.php" method="post">
  <fieldset>
   <legend> Validação de campos numéricos </legend>

   <label class="alinha"> Idade: </label>
   <input type="text" name="idade" autofocus> <br>

  <button name="enviar-dados"> Submit </button>
 </form>

 <?php
  include "exe06.inc.php";
  
  if(isset($_POST['enviar-dados']))
   {
   //script principal

   $idade = testarIdade();

   testarVoto($idade);

   }  
 ?> 
</body> 
</html> 