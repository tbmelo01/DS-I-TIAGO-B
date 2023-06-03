<?php

    $user = $_POST['txUsuario'];
    $pass = $_POST['txSenha'];

    include("conexao.php");

    $stmt = $pdo->prepare("select * from tbUsuario 
                            where emailUsuario='$user' and senhaUsuario='$pass'"
                        );	
    $stmt ->execute();
    
    $row = $stmt ->fetch(PDO::FETCH_BOTH);
        
    //echo $row[1] . " ";
    
    if($row[1]==null){
        echo "Usuário e/ou senha inválidos";
    }
    else{
        echo "Usuário logado";
    }
?>