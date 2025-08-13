<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Fundamentos do PHP com MySQL </title> 
  <link rel="stylesheet" href="../css/formata-banco.css">
</head> 

<body> 
 <h1> PHP e Banco de Dados - Avaliação  </h1>

 <form action="avaliacao.php" method="post">

 <!-- formulario de cadastro -->
  <fieldset>
   <legend> Cadastro </legend>

   <label class="alinha"> Nome do clube: </label>
   <input type="text" name="nome" autofocus> <br>

   <label class="alinha"> Estado de origem: </label>
   <input type="text" name="estado"> <br>

   <label class="alinha"> Qtd. de vezes campeão: </label>
   <input type="number" name="campeao" min="0"> <br>
   
   <div><button name="registro"> Cadastrar clube </button></div>

   <div><button name="tabularDados"> Listar TRI campeões estaduais </button></div>

  </fieldset>
  
 </form>

 <?php
  //requires básicos
  require "../includes/dados-conexao.inc.php"; //muda os nomes só
  require "../includes/conectar.inc.php"; //nao muda
  require "../includes/criar-banco.inc.php"; //nao muda
  require "../includes/abrir-banco.inc.php"; //nao muda
  require "../includes/definir-utf8.inc.php"; //nao muda
  require "../includes/criar-tabelas.inc.php"; //muda simmm

  if(isset($_POST['registro']))
   {
   require "../includes/cadastrar.inc.php";
   }

  if(isset($_POST['tabularDados']))
   {
   require "../includes/tabular-dados.inc.php";
   }
  
  require "../includes/desconectar.inc.php";
 ?>    
</body> 
</html>




