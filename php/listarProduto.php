<?php
    include_once("conexao.php");

    $query = "SELECT id,nome,preco,quantidade,idCategoria FROM produtos";

    $categorias = mysqli_query($mysqli,$query);
                 

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Categorias</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
</head>
<body>
    <header>
    
        <div class="div-header">
            <h1 class="titulo-header" >Gestão de Mudanças</h1>
            <img class="img-header" src="../img/header.png" alt="">          
        </div>

    </header>

    <div class="conteudo">
    <nav class="sidebar">
        <div class="categorias">
            <a href="inserirCategoria.php">
                <span> <i class="bi bi-columns-gap"></i></span>
                <span>Categorias</span>
            </a>
        </div>

        <div class="produtos">
            <a href="listarProduto.php"> 
                <span> <i class="bi bi-file-earmark-plus"></i></span>
                <span>Produto</span>
            </a>
        </div>
    </nav>

    <div>

        <h1 class="categoria-titulo">Produtos</h1>
        <table>
            <tr>
                <td>ID</td>
                <td>Nome do Produto</td>
                <td>Preço</td>
                <td>Qtd</td>
                <td>Total</td>
                <td>Ação</td>
            </tr>

            <?php  while($linha = mysqli_fetch_array($categorias)){
                    $id = $linha["id"];
                    $nome = $linha["nome"];
                    $preco = $linha["preco"];
                    $qtd = $linha["quantidade"];
                ?>
            <tr>
                <th><?php echo "$id" ?></th>
                <th><?php echo "$nome" ?></th>
                <th><?php echo "$preco" ?></th>
                <th><?php echo "R$" . "$qtd" ?></th>
                <th><?php echo "$preco * $qtd" ?></th>
                <th >
                    <a class="acoes" href="alterarProduto.php"><img src="../img/alterar.png" alt=""></a>
                    <a class="acoes" href="removerProduto.php?id=<?php echo $id;?>"><img src="../img/remover.png" alt=""></a>
                </th>
            </tr>
    <?php }?>
        </table>
    </div>

    <div>
        <button><a href="inserirCategoria.php">Inserir Nova Categoria</a></button>
    </div>
    </div>
</body>
</html>