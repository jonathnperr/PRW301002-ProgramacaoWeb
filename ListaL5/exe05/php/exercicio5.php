<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Fundamentos do PHP com MySQL </title> 
  <link rel="stylesheet" href="../css/formata-banco.css">
</head> 

<body> 
 <h1> PHP e Banco de Dados - Farmácia  </h1>

 <form action="exercicio5.php" method="post">

 <!-- formulario de cadastro -->
  <fieldset>
   <legend> Cadastro </legend>

   <label class="alinha"> Nome do medicamento: </label>
   <input type="text" name="nomeMedicamento" autofocus> <br>

   <label class="alinha"> Preço de venda: </label>
   <input type="number" name="preco" step="0.01"> <br>

   <label class="alinha"> Data de validade: </label>
   <input type="date" name="validade">
   
   <div><button name="cadastrarMedicamento"> Cadastrar medicamento </button></div>

   <div><button name="tabularDados"> Mostrar medicamentos cadastrados </button></div>

   <div><button name="faturamento"> Calcular faturamento </button></div>

   <div><button name="maisCaro"> Mostrar medicamento mais caro </button></div>

   <div><button name="excluir"> Excluir med. com validade após 01/10/2023 </button></div>

  </fieldset>
  
 </form>

 <?php
  require "../includes/dados-conexao.inc.php";
  require "../includes/conectar.inc.php";
  require "../includes/criar-banco.inc.php";
  require "../includes/abrir-banco.inc.php";
  require "../includes/definir-utf8.inc.php";
  require "../includes/criar-tabelas.inc.php";

  if(isset($_POST['cadastrarMedicamento']))
   {
   require "../includes/cadastrar-medicamento.inc.php";
   }

  if(isset($_POST['tabularDados']))
   {
   require "../includes/tabular-dados.inc.php";
   }

  if(isset($_POST['faturamento']))
   {
   require "../includes/calcular-faturamento.inc.php";
   }

   if(isset($_POST['maisCaro']))
   {
   require "../includes/mais-caro.inc.php";
   } 

   if(isset($_POST['excluir']))
   {
    require "../includes/excluir-produto.inc.php";
   } 
  
  require "../includes/desconectar.inc.php";
 ?>    
</body> 
</html>




