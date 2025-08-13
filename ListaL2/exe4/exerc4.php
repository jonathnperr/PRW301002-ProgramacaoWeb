<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Fundamentos do PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">

</head> 

<body> 
 <h1> Lista L2 - Exercício: Carrinho de compras </h1>

 <?php
  //testando se comprou no minimo um produto
  if(isset($_POST['produtos']))
  {
    //criar um vetor com o nome e o preço de cada produto
    $vetorprodutos = ["Produto cosmético" => 280.82,
                      "Chocolate" => 30.85,
                      "Tênis" => 500.00];

    //recebendo o nome de cada produto selecionado pelo usuário no formulário
    $produtoscomprados = $_POST['produtos'];

    //percorrer o vetor com o laço foreach
    $soma = 0;
    echo "<p>";

    foreach($produtoscomprados as $nomedoproduto)
    {
      $soma = $soma + $vetorprodutos[$nomedoproduto];
      echo "Produto comprado: <span> $nomedoproduto </span> <br>";
    }
    $somaformatada = number_format($soma, 2, ",", ".");

    echo "De acordo com a compra efetuada, o valor total a ser pago é: <span> R$ $somaformatada </span> </p> ";
    }
    else
    {
      echo "<p> Você não adquiriu nenhum produto. </p> ";
    }

 ?>
</body> 
</html> 