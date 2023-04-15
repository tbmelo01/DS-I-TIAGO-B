<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>

        <section>

            <form action="contato-salvar.php" method="post">      
                <div>
                    <input type="text" placeholder="Nome" name="txNome" />
                </div>		

                <div>
                    <input type="text" placeholder="E-mail" name="txEmail" />
                </div>		

                <div>
                    <input type="text" placeholder="Assunto" name="txAssunto" />
                </div>		

                <div>
                    <textarea placeholder="Mensagem" name="txMensagem"></textarea>
                </div>

                <div>
                    <input type="submit" value="Salvar" />
                </div>
            </form>
            
        </section>
        
    </body>
</html>