<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Banco de dados com PHP  </title> 
  <link rel="stylesheet" href="../css/formata-banco.css">
</head> 

<body> 
  <h1> Integrando PHP com MySQL </h1>

  <form action="exercicio6.php" method="post">

  <!-- form de cadastrar o aluno -->
   <fieldset>
    <legend> Cadastro de alunos </legend>

    <label class="alinha"> Nome: </label>
    <input type="text" name="nome-aluno" autofocus> <br>

    <label class="alinha"> Matrícula: </label>
    <input type="text" name="matricula"> <br>

    <button name="cadastrar-aluno"> Cadastrar aluno </button>
   </fieldset>

  <!-- form de cadastrar as ucs -->
   <fieldset>
    <legend> Cadastro de UCs </legend>

    <label class="alinha"> Nome da UC: </label>
    <input type="text" name="nome-uc"> <br>

    <label class="alinha"> Matrícula do aluno: </label>
    <input type="text" name="matricula-uc"> <br>

    <button name="cadastrar-uc"> Cadastrar UC </button>
   </fieldset>

   <!-- form de pesquisa do aluno -->
   <fieldset>
    <legend> Pesquisa </legend>

    <label class="alinha"> Nome do aluno: </label>
    <input type="text" name="pesquisa-nome-aluno"> <br>
    
    <button name="pesquisar"> Pesquisar aluno </button>
   </fieldset>
  </form>
  
  <?php
   require "../includes/dados-conexao.inc.php";
   require "../includes/conectar.inc.php";
   require "../includes/criar-banco.inc.php";
   require "../includes/abrir-banco.inc.php";
   require "../includes/definir-utf8.inc.php";
   require "../includes/criar-tabelas.inc.php";

   if(isset($_POST['cadastrar-aluno']))
    {
    require "../includes/cadastrar-aluno.inc.php";
    }

   if(isset($_POST['cadastrar-uc']))
    {
    require "../includes/cadastrar-uc.inc.php";
    }

   if(isset($_POST["pesquisar"]))
    {
    require "../includes/pesquisar-ucs.inc.php";
    }

  require "../includes/desconectar.inc.php";  
  ?>
</body> 
</html> 