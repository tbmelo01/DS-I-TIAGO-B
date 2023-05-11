<?php  
    $titulo = $_POST['txTitulo'];
    $autor = $_POST['txAutor'];
    $genero = $_POST['txIdGenero'];
    $descricao = $_POST['txDescricao'];
        
    include("conexao.php");

    $stmt = $pdo->prepare("insert into tbfilme values(null,'$titulo','$autor','$genero','$descricao')");	    
	$stmt ->execute();    

    header("location:cadastro-filme.php");    

    /* add uma coluna de img na tabela filme e colocar o mesmo caminho que ela está no html*/
?>

