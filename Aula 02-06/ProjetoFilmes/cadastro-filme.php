
<?php include('cabecalho.php'); ?>

<section>

            <form  class="form" action="filme-salvar.php" method="post">      
                  
            
                <div class="fundo">
                    <textarea type="url" placeholder="Link" name="txtLink"></textarea>
                </div>	
                <div class="fundo">
                    <input type="text" placeholder="Título" name="txtTitulo" />
                </div>		
                <div class="fundo">
                    <input type="text" placeholder="Diretor" name="txtDiretor"/>
                </div>		
                <div class="fundo">
                    <input type="number" placeholder="Genero" name="txtIdGenero" />
                </div>		
                <div class="fundo">
                    <textarea placeholder="Descrição" name="txtDescricao"></textarea>
                </div>
                <div class="fundo">
                    <input class="botao" type="submit" value="Salvar" />
                </div>
            </form>
            
        </section>

<?php include ('rodape.php'); ?>