<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Fundamentos do PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body> 
  <h1> ListaL1 - Exercício 10: Farmácia </h1>

  <?php

  $valorcompra = $_POST["valorcompra"]; // guarda o valor da compra;
  $cartao = isset($_POST['cartaof']); // retorna bool caso pague com cartão fidelidade;

  //verifica se faixa etária está marcada e guarda a opção;
  if(isset($_POST['idade']))
  {
    $idade = $_POST["idade"]; // 0 = menos de 55 / 1 = 55 a 70 / 2 = mais de 70;
  }
  else
  {
    exit("Infos incompletas: Faixa etária não informada.");
  }

  //calculo dos descontos caso pague com cartaof ou não;
  if($cartao)
  {
    if($idade == 0)
    {
      $desconto = $valorcompra * (5/100);
    }
    elseif($idade == 1)
    {
      $desconto = $valorcompra * (10/100);
    }
    elseif($idade == 2)
    {
      $desconto = $valorcompra * (12/100);
    }
  }
  else
  {
    if($idade == 0)
    {
      $desconto = 0;
    }
    elseif($idade == 1)
    {
      $desconto = $valorcompra * (5/100);
    }
    elseif($idade == 2)
    {
      $desconto = $valorcompra * (7/100);
    }
  }

  // calculo final da compra
  $valorfinal = $valorcompra - $desconto;
  $valorfinalf = number_format($valorfinal, 2, ",", ".");

   echo "<p> Processamento da venda: <br>
   Valor final da compra = <span> R$ $valorfinalf </span> <br> </p>";
   ?>

</body>
</html>
