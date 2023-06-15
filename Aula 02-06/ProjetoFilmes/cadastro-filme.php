
<?php include('cabecalho.php'); ?>

<section>

            <form  class="form" action="filme-salvar.php" enctype = "multipart/form-data"method="post">      
                  
            
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
                    <input type="text" placeholder="Duração" name="txtDuracao"/>
                </div>
                <div class="fundo">
                    <input type="text" placeholder="Classificação" name="txtClassificacao"/>
                </div>
                <div class="fundo">
                    <input type="text" placeholder="Ano" name="txtAno"/>
                </div>				
                <div class="fundo">
                    <input type="number" placeholder="Genero" name="txtIdGenero" />
                </div>		
                <div class="fundo">
                    <textarea placeholder="Descrição" name="txtDescricao"></textarea>
                </div>
                <div class="fundo">
                <input type = "file" name = "arqimage" >
                </div>	
                <div class="fundo">
                    <input type="text" placeholder="Seção" name="txtSecao"/>
                </div>	
                <div class="fundo">
                    <input class="botao" type="submit" value="Salvar" />
                </div>
            </form>
            
        </section>

<!-- <?php include ('rodape.php'); ?> -->