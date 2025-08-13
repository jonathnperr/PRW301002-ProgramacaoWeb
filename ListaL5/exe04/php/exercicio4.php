<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Banco de dados com PHP  </title> 
  <link rel="stylesheet" href="../css/formata-banco.css">
</head> 

<body> 
  <h1> Integrando PHP com MySQL </h1>

  <form action="exercicio4.php" method="post">

  <!-- form de cadastrar o médico -->
   <fieldset>
    <legend> Módulo 1 - cadastro de médicos </legend>

    <label class="alinha"> CRM: </label>
    <input type="text" name="crm" autofocus placeholder="Forneça o CRM do médico"> <br>

    <label class="alinha"> Nome: </label>
    <input type="text" name="nome-medico"> <br>

    <button name="cadastrar-medico"> Cadastrar médico </button>
   </fieldset>

  <!-- form de cadastrar o cliente -->
   <fieldset>
    <legend> Módulo 2 - cadastro de pacientes </legend>

    <label class="alinha"> Nome: </label>
    <input type="text" name="nome-paciente" placeholder="Forneça o nome do paciente"> <br>

    <label class="alinha"> Data da internação: </label>
    <input type="date" name="data-internacao"> <br>

    <label class="alinha"> CRM do médico responsável: </label>
    <input type="text" name="crm-atendimento"> <br>

    <button name="cadastrar-paciente"> Cadastrar paciente </button>
   </fieldset>

   <!-- form de pesquisa do médico -->

   <fieldset>
    <legend> Módulo 3 - pesquisa pelo nome do médico </legend>

    <label class="alinha"> Nome do médico pesquisado: </label>
    <input type="text" name="pesquisa-nome-medico1"> <br>
    
    <button name="pesquisar-medico1"> Pesquisar médico </button>
   </fieldset>

   <!-- form de pesquisa médico + data -->

   <fieldset>
    <legend> Módulo 4 - pesquisa pelo nome do médico e data de atendimento </legend>

    <label class="alinha"> Nome do médico pesquisado: </label>
    <input type="text" name="pesquisa-nome-medico2"> <br>

    <label class="alinha"> Forneça a data: </label>
    <input type="date" name="pesquisa-data"> <br>
    
    <button name="pesquisar-medico2"> Pesquisar médico e data </button>
   </fieldset>  
  </form>
  
  <?php
   require "../includes/dados-conexao.inc.php";
   require "../includes/conectar.inc.php";
   require "../includes/criar-banco.inc.php";
   require "../includes/abrir-banco.inc.php";
   require "../includes/definir-utf8.inc.php";
   require "../includes/criar-tabelas.inc.php";

   if(isset($_POST['cadastrar-medico']))
    {
    require "../includes/cadastrar-medico.inc.php";
    }

   if(isset($_POST['cadastrar-paciente']))
    {
    require "../includes/cadastrar-paciente.inc.php";
    }

   if(isset($_POST["pesquisar-medico1"]))
    {
    require "../includes/pesquisar-medico1.inc.php";
    }

   if(isset($_POST["pesquisar-medico2"]))
    {
    require "../includes/pesquisar-medico2.inc.php"; 
    }

  require "../includes/desconectar.inc.php";  
  ?>
</body> 
</html> 