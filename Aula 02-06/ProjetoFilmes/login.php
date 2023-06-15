<link rel="stylesheet" href="./css/login.css">

<?php include("conexao.php");
        // include("menu.php");
?>
 
<?php
        if(isset($_GET['mensagem'])){
    ?>
        <div>
            <p> <?php echo $_GET['mensagem']; ?> </p>
        </div>    
    <?php } ?>


<div class="login-box">
  <h2>Login</h2>
  <form action="fazer-login.php" method="post">
    <div class="user-box">
      <input type="text" name="txUsuario" required="">
      <label>Usuário</label>
    </div>
    <div class="user-box">
      <input type="password" name="txSenha" required="">
      <label>Senha</label>
    </div>
    
    <a href="" >
      <input class="opacit" type="submit" value="Entrar"  > Entrar
    </a>

  </form>
  <form action="cadastrar.php" method="post">

   <a href="">
    <input class="opacit" type="submit" value="Cadastre-se" > cadastrar
   </a>
  </form>
</div>
