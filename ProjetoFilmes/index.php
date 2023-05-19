<?php include('cabecalho.php'); 
    include("conexao.php");
?>


<strong><h1 class="subtitulo">Em Cartaz</h1></strong>


<section>
    <?php
        $stmt = $pdo->prepare("SELECT f.link, f.titulo, f.diretor, f.idGenero, g.genero, f.descricao FROM tbGenero g inner join tbFilme f
        on g.idGenero = f.idGenero order by f.idFilme desc limit 3");	
        $stmt ->execute();
        
        while($row = $stmt ->fetch(PDO::FETCH_BOTH)){            
            
        ?>    
        <div class="filme">
            <?php echo '<iframe width="560" height="315" src="'. $row[0] .'" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>'?>           
            <h1> <?php echo $row[1] ?> </h1>   
            <h2><?php echo $row[2] ?> </h2>   
            <h3> <?php echo $row[4] ?> </h3>   
            <p> <?php echo $row[5] ?> </p>          
        </div>
        
    <?php }	?>
      </section> 

<?php include ('rodape.php'); ?>