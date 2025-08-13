<?php
  function calculocomissao($valorvenda, $perc)
  {
    $valorcomissao = $valorvenda * $perc/100;
    return $valorcomissao;
  }

  function calculodes($valorvenda)
  {
    define("DESC", 5/100);
    $desconto = 0;
    if(isset($_POST["forma-pag"]))
    {
      $desconto = $valorvenda * DESC;
    }
    return $desconto;
  }

  function calculofinal($valorvenda, $desconto)
  {
    $valorf = $valorvenda - $desconto;
    return $valorf;
  }

  function mostrar($valorvenda, $perc, $valorcomissao, $desconto, $final)
  {
    echo "<p> Resultado do processamento: <br>
              Valor inicial: <span> R$ $valorvenda </span> <br>
              Percentual de comissão: <span> $perc% </span> <br>
              Valor comissão do vendedor: <span> R$ $valorcomissao </span> <br>
              Valor do desconto: <span> R$ $desconto </span> <br>
              Valor final: <span> R$ $final </span> <br>";
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
 <h1> Lista L4: exercício 4 - Vendas </h1>

 <form action="exe04.php" method="post">
  <fieldset>
   <legend> Processamento de vendas </legend>
   
  <br>
   <label class="alinha"> Valor: </label>
   <input type="number" name="venda" step="0.01" min="0" autofocus> <br>

   <label class="alinha"> Percentual de comissão: </label>
   <input type="number" name="perc" step="0.1" min="0"> <br><br>

   <input type="checkbox" name="forma-pag[]">
   <label> Pagamento com cartão fidelidade </label> <br> 

  <button name="enviar"> Submit </button>
 </form>

 <?php
  if(isset($_POST['enviar']))
   {
      $valorvenda = $_POST["venda"];
      $perc = $_POST["perc"];

      //funcao pra calcular a comissao
      $valorcomissao = calculocomissao($valorvenda, $perc);

      //desconto caso cartao fidelidade
      $desconto = calculodes($valorvenda);

      //calculo valor final
      $final = calculofinal($valorvenda, $desconto);

      //funcao mostrar dados
      mostrar($valorvenda, $perc, $valorcomissao, $desconto, $final);
   }  
 ?> 
</body> 
</html> 