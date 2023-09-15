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
</head>
<body>
    <div>
        <h1>Adicionar nova Categoria</h1>
        <form method="POST">
            <label for="nome">Nome da tabela</label>
            <input type="nome">
            <label for="id">ID</label>
            <input type="text" name="id" readonly value=<?php $query = "SELECT LAST_INSERT_ID"; result = mysqli_query($mysqli, $query) echo"$result"; ?>>
            <label for="data">Data</label>
            <input type="data">
            <i></i>
            <input class="botao-incluir" type="submit" value="Salvar Dados";>
        </form>
    </div>

    <script src="/js/incluirCategoria.js"></script>
</body>
</html>