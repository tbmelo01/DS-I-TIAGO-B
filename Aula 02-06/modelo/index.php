<?php include("conexao.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <nav>
        <ul>
            <li> <a href="index.php"> Home </a> </li>
            <li> <a href="contato.php"> Contato </a> </li>
            <li> <a href="contato-lista.php"> Listar Contatos </a> </li>
        <ul>
    </nav>

    <section>
        <h1>
            Início
        </h1>
    </section>

    <section>
    <?php
        $stmt = $pdo->prepare("SELECT   f.idFilme,
                                        f.filme,
                                        f.idGenero, 
                                        g.genero
                                        FROM tbfilme f
        inner join tbGenero g
        on f.idGenero = g.idGenero limit 3");	
        $stmt ->execute();
        
        while($row = $stmt ->fetch(PDO::FETCH_BOTH)){            
            
        ?>    
            <figure style="float:left;">
                <img src="" />
                <figcaption>        
                    <h1> <?php echo $row[1] ?> </h1>   
                    <h2> Duração </h2>   
                    <h3> Descrição </h3>   
                    <p> <?php echo $row[3] ?> </p>   
                </figcaption>
            </figure>

        <?php }	?>
       
    </section>

    <section>

    </section>


    
</body>
</html>