<?php include("conexao.php"); ?>

<?php

  $id = $_GET['x'];

  $stmt = $pdo->prepare("select * from tbcontato where idcontato='$id'");	
  while($row = $stmt ->fetch(PDO::FETCH_BOTH)){
    echo "<tr class='celula'>";
      echo "<td> $row[0] </td>";						
      echo "<td> $row[1] </td>";						
      echo "<td> $row[2] </td>";						
      echo "<td> $row[3] </td>";											
      echo "<td> $row[4] </td>";
      echo "<td> 
              <a href='?id=$row[0]&nome=$row[1]&email=$row[2]&assunto=$row[3]&msg=$row[4]'> Editar </a>
              <a href='contato-remover.php?id=$row[0]'> Remover </a>
            </td>";
    echo "</tr>";
  }	
   
  
?>