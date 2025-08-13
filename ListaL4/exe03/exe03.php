<?php
  function testarTemp()
  {
    $temperatura = $_POST["temp"];
    $temperatura = filter_var($temperatura, FILTER_VALIDATE_FLOAT);

    if($temperatura === false)
    {
      exit("<p> Temperatura inválida. </p>");
    }
    
    return $temperatura;

  }

  function testarEscala()
  {
    if(!isset($_POST['conv']))
    {
      exit("<p> Escolha uma escala. </p>");
    }
    $escala = $_POST["conv"];
    return $escala;
  }

  function convCpF($temp)
  {
    $tempconv = ($temp*9)/5 + 32;
    echo "<p> Dados convertidos: <br>
              Temp. em Celsius: {$temp}°C <br>
              Temp. em Fahrenheit: {$tempconv}°F </p>";
  }

  function convFpC($temp)
  {
    $tempconv = ($temp - 32) * 5/9;
    echo "<p> Dados convertidos: <br>
              Temp. em Fahrenheit: {$temp}°C <br>
              Temp. em Celsius: {$tempconv}°F </p>";
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
 <h1> Lista L4: exercício 3 - Temperaturas </h1>

 <form action="exe03.php" method="post">
  <fieldset>
   <legend> Conversão de temperaturas </legend>

   <label> Temperatura a ser convertida: </label>
   <input type="number" name="temp" step="0.1" autofocus> <br><br>

   <label> Escolha a escala de conversão: </label> <br><br>
   <input type="radio" name="conv" value="CpF"> <label> De Celcius para Fahrenheit </label> <br>
   <input type="radio" name="conv" value="FpC"> <label> De Fahrenheit para Celcius </label> <br>

  <button name="enviar"> Submit </button>
 </form>

 <?php
  if(isset($_POST['enviar']))
   {
      //teste se o dado é n real
      $temp = testarTemp();

      //teste se selecionou o botão
      $escalaEscolhida = testarEscala();

      //teste qual escala foi escolhida e chama função
      if($escalaEscolhida == "CpF")
      {
        convCpF($temp);
      }
      else
      {
        convFpC($temp);
      }


   }  
 ?> 
</body> 
</html> 