<?php
    include("conexao.php");

    if($_SERVER["REQUEST_METHOD"] == "GET"){
        $nome = $_GET["nome"];
        $preco = $_GET["preco"];
        $quantidade = $_GET["quantidade"];
        $idCategoria = $_GET["idCategoria"];

        $sql ="INSERT INTO produtos VALUES(default,'$nome','$preco','$quantidade','$idCategoria')";

        if(mysqli_query($mysqli, $sql)){
            echo "Produto cadastrado com sucesso";
        }else{
            echo "Erro!" . mysqli_connect_error($mysqli);
        }

        
        mysqli_close($mysqli);
    }
?>