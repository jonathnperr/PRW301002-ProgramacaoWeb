<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Fundamentos do PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">

</head> 

<body> 
 <h1> ListaL1 - Exercício 9: lojinha do centro </h1>

 <?php
  define("TAXA_DESCONTO", 5/100);
  define("TAXA_ACRESCIMO", 2/100);

  $valorCompra = $_POST['valor-compra'];

  $escolheuModalidadePagamento = isset($_POST['modalidade-pagamento']);

  if(!$escolheuModalidadePagamento)
   {
   exit("<p> AVISO: você deve escolher a forma de pagamento: à vista ou a prazo - aplicação encerrada! </p>");
   }

  $modalidadePagamento = $_POST['modalidade-pagamento'];

  //calculo valor final
  $acrescimo = 0;
  $desconto  = 0;

  if($modalidadePagamento == "à vista")
   {
   $desconto = $valorCompra * TAXA_DESCONTO;   
   }
  else
   {
   $acrescimo = $valorCompra * TAXA_ACRESCIMO;
   }

   $valorFinalCompra = $valorCompra - $desconto + $acrescimo;
  
  //sorteio
  $escolheuPagamentoCartao = isset($_POST['pagamento-cartao']);

  if($escolheuPagamentoCartao)
   {
   $sorteio = "<span> Apto a participar do sorteio. </span>";
   }
  else
   {
   $sorteio = "<span> NÃO está apto a participar do sorteio. </span>"; 
   }

  $valorFinalCompraFormatado = number_format($valorFinalCompra, 2, ",", ".");

  echo "<p> Processamento final: <br>
            Valor final = <span> R$ $valorFinalCompraFormatado </span> <br>
            $sorteio </p>";
  ?>
</body> 
</html> 