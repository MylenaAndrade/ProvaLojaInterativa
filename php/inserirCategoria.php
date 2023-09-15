<?php
    include("conexao.php");

    if($_SERVER["REQUEST_METHOD"] == "GET"){
        $nome = $_GET["nome"];
        $dtCriacao = $_GET["dtCriacao"];

        $sql ="INSERT INTO categorias VALUES(default,'$nome',default)";

        if(mysqli_query($mysqli, $sql)){
            echo "Categoria cadastrada com sucesso";
        }else{
            echo "Erro!" . mysqli_connect_error($mysqli);
        }

        
        mysqli_close($mysqli);
    }

?>