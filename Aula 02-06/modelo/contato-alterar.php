<?php  
    $id = $_POST['txIdContato'];
    $nome = $_POST['txNome'];
    $email = $_POST['txEmail'];
    $assunto = $_POST['txAssunto'];
    $mensagem = $_POST['txMensagem'];
    
    include("conexao.php");

    $stmt = $pdo->prepare("
        update tbContato set
            nomeContato='$nome',
            emailContato='$email',
            assuntoContato='$assunto',
            mensagemContato='$mensagem'
            where idContato ='$id';
    ");	    
	$stmt ->execute();    

    header("location:contato-lista.php");    
    
?>