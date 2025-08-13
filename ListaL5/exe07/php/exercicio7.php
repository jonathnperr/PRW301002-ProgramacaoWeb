<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Fundamentos do PHP com MySQL </title> 
  <link rel="stylesheet" href="../css/formata-banco.css">
</head> 

<body> 
 <h1> PHP e Banco de Dados - Sistema de projetos  </h1>

 <form action="exercicio7.php" method="post">

 <!-- formulario de cadastro -->
  <fieldset>
   <legend> Cadastro </legend>

   <label class="alinha"> ID do projeto: </label>
   <input type="text" name="id" autofocus> <br>

   <label class="alinha"> Orçamento: </label>
   <input type="number" name="orcamento" step="0.01"> <br>

   <label class="alinha"> Data de inicio: </label>
   <input type="date" name="data">

   <label class="alinha"> Horas para a execução: </label>
   <input type="number" name="horas" min="0"> <br>
   
   <div><button name="registro"> Cadastrar projeto </button></div>

   <div><button name="tabularDados"> Listar ID e orçamentos cadastrados </button></div>

   <div><button name="apos2020"> Projetos cadastrados após 01/01/2020 </button></div>

   <div><button name="excluir"> Excluir projetos com menos de 100h E orçamento < R$1000,00 </button></div>

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

  if(isset($_POST['tabularDados'])) //mostrar id e orçamento
   {
   require "../includes/tabular-dados.inc.php";
   }

  if(isset($_POST['apos2020'])) //qtd projetos
   {
   require "../includes/apos2020.inc.php";
   }

   if(isset($_POST['excluir']))
   {
    require "../includes/excluir-projetos.inc.php";
   } 
  
  require "../includes/desconectar.inc.php";
 ?>    
</body> 
</html>




