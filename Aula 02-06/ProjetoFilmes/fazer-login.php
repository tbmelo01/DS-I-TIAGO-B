<?php
$user = $_POST['txUsuario'];
$pass = $_POST['txSenha'];

include("conexao.php");

$stmt = $pdo->prepare("SELECT * FROM tbusuario WHERE emailUsuario = :user AND senhaUsuario = :pass");
$stmt->bindParam(':user', $user);
$stmt->bindParam(':pass', $pass);
$stmt->execute();
$rowUsuario = $stmt->fetch(PDO::FETCH_ASSOC);

if($rowUsuario == ''){
    print_r($_POST);
    include ("login.php");
    echo  "<div id='retorno'> Tipo de usuário inválido.</div>"; die;
}


$tipoUsuario = $rowUsuario["tipoUsuario"];





if ($tipoUsuario == 2) {

    
        header("Location: filme.php");
    

} else {

    
        header("Location: administrador.php");
    

}
?>
