<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Fundamentos do PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body> 
  <h1> ListaL1 - Exercício 7: Mercado </h1>

  <?php

  define("desc", 5/100);
  define("acres", 2/100);

  $valorcompra = $_POST["valorcompra"];

  // calculo pagamento
  if(isset($_POST['formapag']))
  {
    $formapag = $_POST["formapag"];
    if($formapag == 0)
    {
      $desconto = $valorcompra * desc;
    }
    else
    {
      $desconto = 0;
    }
  }
  else
  {
    exit("Infos incompletas: forma de pagamento incompleta.");
  }


  //calculo acrescimo
  if(isset($_POST['formaent']))
  {
    $formaent = $_POST["formaent"];
    if($formaent == 0)
    {
      $acrescimo = $valorcompra * acres;
    }
    else
    {
      $acrescimo = 0;
    }
  }
  else
  {
    exit("Infos incompletas: forma de entrega incompleta.");
  }
  
  // calculo final da compra
  $valorfinal = $valorcompra - $desconto + $acrescimo;

  $valorcompraf      = number_format($valorcompra, 2, ",", ".");
  $acrescimof        = number_format($acrescimo, 2, ",", ".");
  $descontof         = number_format($desconto, 2, ",", ".");
  $valorfinalf = number_format($valorfinal, 2, ",", ".");

   echo "<p> Processamento da venda: <br>
   Valor inicial = <span> R$ $valorcompraf </span> <br>
   Valor final = <span> R$ $valorfinalf </span> <br>
   Desconto = <span> R$ $descontof </span> <br>
   Acréscimo      = <span> R$ $acrescimof </span> </p>";

   ?>

</body>
</html>
