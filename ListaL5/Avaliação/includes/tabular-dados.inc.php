<?php
   $sql = "SELECT * FROM $nomeDaTabela WHERE campeao = 3";
   $resultado = $conexao->query($sql) or exit($conexao->error);
   
   $numeroLinhasRetornadas = $conexao->affected_rows;

   if($numeroLinhasRetornadas == 0)
   {
       echo "<p> Não há TRI campeões estaduais. </p>";
   }
   else
   {
       echo "<table>
              <tr>
                  <th> ID </th>  
                  <th> Nome </th>
                  <th> UF de origem </th>
                  <th> Vezes Campeões </th>
              </tr>";

   while ($registro = $resultado->fetch_array())
   {
    
        $id              = htmlentities($registro[0], ENT_QUOTES, "UTF-8");
        $nome            = htmlentities($registro[1], ENT_QUOTES, "UTF-8");
        $estado          = htmlentities($registro[2], ENT_QUOTES, "UTF-8");
        $campeao         = htmlentities($registro[3], ENT_QUOTES, "UTF-8");

       echo "<tr>
        <td> $id </td>
        <td> $nome </td>
        <td> $estado </td>
        <td> $campeao </td>
      </tr>";
   }    
   }           
?>