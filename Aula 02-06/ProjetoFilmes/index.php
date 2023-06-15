<?php include('cabecalho.php'); 
    include("conexao.php");
?>

<strong>
    <h1 class="subtitulo1">Em Cartaz</h1>
</strong>


<section>
    <?php
        $stmt = $pdo->prepare("SELECT img, titulo, secao FROM tbFilme LIMIT 3");	
        $stmt->execute();
        
        while($row = $stmt->fetch(PDO::FETCH_BOTH)) {           
    ?>
    <div class="filme">
        <?php echo '<img src="img/' . $row[0] . '">' ?>
  
        <h1>
            <?php echo $row[1] ?>
        </h1>
    </div>
    <?php }	?>
</section>


<strong>
    <h1 class="subtitulo">Populares</h1>
</strong>


<section>
    <?php
        $stmt = $pdo->prepare ("SELECT img, titulo FROM tbFilme order by idFilme desc limit 3");	
        $stmt ->execute();
        
        while($row = $stmt ->fetch(PDO::FETCH_BOTH)){            
            
        ?>
    <div class="filme">
    <?php echo '<img src="img/' . $row[0] . '">' ?>
        <h1>
            <?php echo $row[1] ?>
        </h1>
    
    </div>

    


    <?php }	?>
</section>

<?php include ('rodape.php');  ?>
 
