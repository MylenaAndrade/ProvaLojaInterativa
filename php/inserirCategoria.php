<?php
    include_once("conexao.php");

    if($_SERVER["REQUEST_METHOD"] == "GET"){
        $nome = $_GET["nome"];
        $dtCriacao = $_GET["dtCriacao"];

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