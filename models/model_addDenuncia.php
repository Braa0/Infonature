<?php
    session_start();

    if(isset($_SESSION['imagem'])) {

        $tipo_denuncia = $_SESSION['tipo_denuncia'];
        $descricao = $_SESSION['descricao'];
        $imagem = $_SESSION['imagem'];

        require_once "../config/connect.php";

        $sql = "INSERT INTO denuncias_tb(tipo_denuncia, descricao, imagem, dataDenuncia) VALUES ('$tipo_denuncia', '$descricao', '$imagem', NOW())";

        $conn->query($sql);

        session_destroy();
        
        header("location: ../galeria.php");
        
    }
?>