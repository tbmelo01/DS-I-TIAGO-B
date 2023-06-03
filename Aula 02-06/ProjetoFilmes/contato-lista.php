<?php include("conexao.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    
    <title>Document</title>
</head>
<body>

    <section>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome</th>
                <th scope="col">E-mail</th>
                <th scope="col">Assunto</th>
                <th scope="col">Mensagem</th>
                <th scope="col">Ações</th>			
            </tr>
            </thead>
            <tbody>
            <?php
                $stmt = $pdo->prepare("select * from tbcontato");	
                $stmt ->execute();
                
                while($row = $stmt ->fetch(PDO::FETCH_BOTH)){
                    echo "<tr class='celula'>";
                        echo "<td> $row[0] </td>";						
                        echo "<td> $row[1] </td>";						
                        echo "<td> $row[2] </td>";						
                        echo "<td> $row[3] </td>";											
                        echo "<td> $row[4] </td>";
                        echo "<td>
                         <a href ='contato-remover.php?id= $row[0]'> Remover </a>
                          </td>";				
                    echo "</tr>";
                }	
            ?>
            </tbody>
        </table>
    </section>


   
</body>
</html>