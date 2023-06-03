<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        if(isset($_GET['mensagem'])){
    ?>
        <div>
            <p> <?php echo $_GET['mensagem']; ?> </p>
        </div>    
    <?php } ?>
        
    <form action="fazer-login.php" method="post">
        <input type="text" name="txUsuario" placeholder="E-mail"/>
        <input type="password" name="txSenha" placeholder="Senha" />
        <input type="submit" value="Login" />
    </form>
    
</body>
</html>