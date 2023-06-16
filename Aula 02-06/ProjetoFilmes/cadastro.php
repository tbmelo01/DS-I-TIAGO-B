<?php 
include("conexao.php");
    $nome = $_POST['txNome'];
    $sobrenome = $_POST['txSobrenome'];
    $email = $_POST['txEmail'];
    $senha = $_POST['txSenha'];
// echo $_POST['txSenha'];
    // print_r ($_POST); die;
        
    
    // echo "insert into tbusuario values(null,'$email','$senha',2,'','$nome')"; die;
    $stmt = $pdo->prepare("insert into tbusuario values(null,'$email','$senha',2,'$sobrenome','$nome')");
	$stmt ->execute();    

    
    header("location:cadastrar.php");    
?>