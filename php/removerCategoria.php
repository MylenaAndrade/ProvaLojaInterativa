<?php
    include_once("conexao.php");

    if($_SERVER["REQUEST_METHOD"] == "GET"){
    
        $id=$_GET["id"];

        $query = "DELETE FROM categorias WHERE id = '$id'";

        if(mysqli_query($mysqli, $query)){
            echo "Categoria removida com sucesso";
        }else{
            echo "Erro!" . mysqli_connect_error($mysqli);
        }

        mysqli_close($mysqli);

    }
?>