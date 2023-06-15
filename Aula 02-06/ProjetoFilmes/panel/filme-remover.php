<?php

$id=$_GET['id'];

//echo $id;

include("conexao.php");

$stmt = $pdo->prepare("delete from tbfilme where idfilme = $id");	    
$stmt ->execute();    

header("location:filme.php");    
