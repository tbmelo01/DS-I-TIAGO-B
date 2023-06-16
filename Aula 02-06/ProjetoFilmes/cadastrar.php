<?php
    include ('cabecalho.php'); 
?>

<section>
    

            <form class="formula" action="cadastro.php" method="post"> 
                
           <strong> <h1 class="ajuste"> Cadastro</h1> </strong> <br><br><br>

            <div class="fundo">
                    <input type="text" placeholder="Nome" name="txNome" required/>
                </div>
                <div class="fundo">
                    <input type="text" placeholder="Sobrenome" name="txSobrenome" required/>
                </div>				
                <div class="fundo">
                    <input type="email" placeholder="E-mail" name="txEmail" required="required"/>
                </div>		
                <div class="fundo">
                    <input type="text" placeholder="Insira uma senha" name="txSenha" required/>
                </div>
                <div class="fundo">
                    <input class="botao" type="submit" value="Cadartrar">
                </div>
                <!-- <div class="">
                    <textarea placeholder="Mensagem" name="txMensagem" required></textarea>
                </div>
                <div class="fundo">
                    <input class="botao" type="submit" value="Salvar" />
                </div> -->
            </form>
            
        </section> 
        <?php include ('rodape.php'); ?>