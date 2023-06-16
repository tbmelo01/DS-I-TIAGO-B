<?php include('cabecalho.php'); ?>

<section>
    
            <form action="contato-salvar.php" method="post">      
                <div class="fundo">
                    <input type="text" placeholder="Nome" name="txNome" required/>
                </div>		
                <div class="fundo">
                    <input type="email" placeholder="E-mail" name="txEmail" required/>
                </div>		
                <div class="fundo">
                    <input type="text" placeholder="Assunto" name="txAssunto" required/>
                </div>		
                <div class="fundo">
                    <textarea placeholder="Mensagem" name="txMensagem" required></textarea>
                </div>
                <div class="fundo">
                    <input class="botao" type="submit" value="Salvar" />
                </div>
            </form>
            
        </section>

<?php include ('rodape.php'); ?>