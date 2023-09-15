<?php
    include_once("conexao.php");

    if($_SERVER["REQUEST_METHOD"] == "GET"){
    
        $id=$_GET["id"];

        $query = "DELETE FROM categorias WHERE id = '$id'";

        mysqli_query($mysqli,$query);

        mysqli_close($mysqli);

    }
?>