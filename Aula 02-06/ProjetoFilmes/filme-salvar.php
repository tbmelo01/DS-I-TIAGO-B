<?php 
    //print_r($_POST);die;
    
    $link = $_POST['txtLink'];
    $titulo = $_POST['txtTitulo'];
    $diretor = $_POST['txtDiretor'];
    $genero = $_POST['txtIdGenero'];
    $descricao = $_POST['txtDescricao'];

    include("conexao.php");
    
    $stmt = $pdo->prepare("insert into tbfilme values(null,'$link','$titulo','$diretor','$genero','$descricao')");	    
	$stmt ->execute();    

    header("location:cadastro-filme.php");    

    /* add uma coluna de img na tabela filme e colocar o mesmo caminho que ela está no html*/
?>

