<?php

    $user = $_POST['txUsuario'];
    $pass = $_POST['txSenha'];

    echo $user . " <br /> ";
    echo sha1($pass);

    include("conexao.php");

    $stmt = $pdo->prepare("select * from tbUsuario 
                            where emailUsuario='$user' and senhaUsuario='$pass'"
                        );	
    $stmt ->execute();
    
    $row = $stmt ->fetch(PDO::FETCH_BOTH);
        
    //echo $row[1] . " ";
    
    if($row[1]==null){
        header("location:login.php?mensagem=Usuário e/ou senha inválidos.");
    }
    else{
        echo "Usuário logado";
    } 
    // session_start();

    // if (!isset($_SESSION['logged_in'])) {
    //     // Redirecionar para a página de login, por exemplo
    //     header("Location: login.php");
    //     exit();

    //     if ($_SESSION['user_level'] != 2) { header("Location: access_denied.php");
    //         exit();
?>