<?php include('cabecalho.php'); ?>

<section>

    <form action="contato-salvar.php" method="post">
        <div>
            <input type="text" placeholder="Nome" name="txNome"/>
        </div>
        <div>
            <input type="text" placeholder="E-mail" name="txEmail" required="required"/>
        </div>
        <div>
            <input type="text" placeholder="Assunto" name="txAssunto"/>
        </div>
        <div>
            <textarea placeholder="Mensagem" name="txMensagem"></textarea>
        </div>
        <div>
            <input type="submit" value="Salvar"/>
        </div>
    </form>

</section>

<?php include ('rodape.php'); ?>