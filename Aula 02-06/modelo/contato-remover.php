<?php

    $id = $_GET['id'];

    //echo $id;

    include("conexao.php");

    $stmt = $pdo->prepare("delete from tbcontato where idContato = $id");	    
	$stmt ->execute();    

    header("location:contato-lista.php"); 



?>