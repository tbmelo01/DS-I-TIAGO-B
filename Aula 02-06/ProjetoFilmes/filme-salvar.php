<?php 
    //print_r($_POST);die;
    
    $link = $_POST['txtLink'];
    $titulo = $_POST['txtTitulo'];
    $diretor = $_POST['txtDiretor'];
    $duracao = $_POST['txtDuracao'];
    $classificacao = $_POST['txtClassificacao'];
    $ano = $_POST['txtAno'];
    $genero = $_POST['txtIdGenero'];
    $img = $_FILES['arqimage']['name'];
    $descricao = $_POST['txtDescricao'];
    $secao = $_POST['txtSecao'];

    include("conexao.php");
    
    $stmt = $pdo->prepare("insert into tbfilme values(null,'$titulo','$diretor','$duracao','$descricao','$classificacao','$ano','$genero','$link', '$img','$secao')");	    
	$stmt ->execute();    

    header("location:cadastro-filme.php");    

    if(isset($_FILES["arqimage"])){
        $arqINome = $_FILES["arqimage"]["name"];
        $arqITipo = $_FILES["arqimage"]["type"];
        $arqITamanho = $_FILES["arqimage"]["size"];
        $arqINomeTemp = $_FILES["arqimage"]["tmp_name"];
        $erroImgMarc = $_FILES["arqimage"]["error"];
    
        if($erroImgMarc==0){
            if(is_uploaded_file($arqINomeTemp)){
                if(move_uploaded_file($arqINomeTemp, "img/".$arqINome)){
                    $caminhoI = $arqINome;
                }
                else{
                    $erro = "Falha ao mover imagem do marcador";
                    echo "$erro";
                }
            }
            else{
                $erro = "Erro no envio: A imagem do marcador não foi recebida com sucesso.";
                echo "$erro";
            }
        }
        else{
            $erro = "Erro no envio: " . $erro;
            echo "$erro";
        }
    }
    else{
        $erro = "Imagem do Marcador enviado não encontrado";
        echo "$erro";
    }

     
    
?>

