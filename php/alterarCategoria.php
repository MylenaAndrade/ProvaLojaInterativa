<?php 
    include_once("conexao.php");

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $id=$_POST["id"];
        $nome = $_POST["nome"];
        
        $query = "UPDATE categorias SET nome = '$nome' WHERE id = '$id'";
        mysqli_query($mysqli, $query);

        mysqli_close($mysqli);
        header("location: /ProvaLojaInterativa/php/listarCategoria.php");
        exit;
    }else{
        $id=$_GET["id"];
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar nova Categoria</title>

    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
</head>
<body>
    <header>
    
        <div class="div-header">
            <h1 class="titulo-header" >Gestão de Mudanças</h1>
             <img class="img-header" src="../img/header.png" alt="">          
        </div>
        <div class="conteudo">
            <nav class="sidebar">
                <div class="categorias">
                    <a href="listarCategoria.php">
                        <span> <i class="bi bi-columns-gap"></i></span>
                        <span>Categorias</span>
                    </a>
                </div>

                <div class="produtos">
                    <a href="inserirProduto.php"> 
                        <span> <i class="bi bi-file-earmark-plus"></i></span>
                        <span>Produto</span>
                    </a>
                </div>
            </nav>

            <div>
                <h1>Alterar Categoria</h1>
                <form action="alterarCategoria.php" method="POST">
                    <label for="nome">Nome da tabela</label>
                    <input type="nome" name="nome">
                    <label for="id">ID</label>
                    <input type="text" name="id" readonly value=<?php echo "$id";?>>
                    <label for="data">Data</label>
                    <input type="data">
                    <input class="botao-incluir" type="submit" value="Salvar Dados";>
                </form>
            </div>
    </div>
    
    </header>

    
</body>
</html>