<?php include('cabecalho.php');
include('menu.php') ?>
<form action="recebimento.php" method="post">

    <label for="nome">
        Nome
    </label>
    <input type="text" id="nome" name="nome">
    <label for="mensagem">
        mensagem
    </label>
    <input type="text" id="mensagem" name="mensagem">
    <label for="button"></label>
    <input type="submit" value="ENVIAR">

</form>
<?php include('rodape.php') ?>