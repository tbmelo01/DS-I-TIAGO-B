
<?php include('cabecalho.php'); ?>

<section>

            <form action="filme-salvar.php" method="post">      
                  
            
                <div>
                    <input type="text" placeholder="Link" name="txLink" />
                </div>	
                <div>
                    <input type="text" placeholder="Título" name="txTitulo" />
                </div>		
                <div>
                    <input type="text" placeholder="Diretor" name="txDiretor"/>
                </div>		
                <div>
                    <input type="number" placeholder="Genero" name="txIdGenero" />
                </div>		
                <div>
                    <textarea placeholder="Descrição" name="txDescricao"></textarea>
                </div>
                <div>
                    <input type="submit" value="Salvar" />
                </div>
            </form>
            
        </section>

<?php include ('rodape.php'); ?>