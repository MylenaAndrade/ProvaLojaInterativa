<?php
    include_once("conexao.php");

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $nome = $_POST["nome"];
        $dtCriacao = $_POST["dtCriacao"];

        $query = "SELECT CURDATE();";

        $sql ="INSERT INTO categorias VALUES(default,'$nome','$query')";

        if(mysqli_query($mysqli, $sql)){
            echo "Categoria cadastrada com sucesso";
        }else{
            echo "Erro!" . mysqli_connect_error($mysqli);
        }

        $result = mysqli_query($mysqli,$query);

        
        mysqli_close($mysqli);
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
        <div>
             <img src="" alt="">          
            <h1>Gestão de Mudanças</h1>
        </div>

        <div>
            <h2>Meu deshboard</h2>
            <h3>Dashboard</h3>
            <i></i>
            <h4>Categorias</h4>
        </div>

        <div>
            <img src="" alt="">
            <h5>Eu</h5>
            <i></i>
            <i class="bi bi-list"></i>
        </div>
    </header>

    <nav class="sidebar">
        <div>
            <a href="">
                <span> <i class="bi bi-columns-gap"></i></span>
                <span>Categorias</span>
            </a>
        </div>

        <div>
            <a href=""> 
                <span> <i class="bi bi-file-earmark-plus"></i></span>
                <span>Produto</span>
            </a>
        </div>
    </nav>
    <div>
        <h1>Adicionar nova Categoria</h1>
        <form method="POST">
            <label for="nome">Nome da tabela</label>
            <input type="nome">
            <label for="id">ID</label>
            <input type="text" name="id" readonly value=>
            <label for="data">Data</label>
            <input type="data">
            <i></i>
            <input class="botao-incluir" type="submit" value="Salvar Dados";>
        </form>
    </div>

    <script src="../js/incluirCategoria.js"></script>
</body>
</html>