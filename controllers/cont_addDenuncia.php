<?php
    if(isset($_POST['btnSubmit'])) {

        session_start();

        $_SESSION['tipo_denuncia'] = $_POST['tipo_denuncia'];
        $_SESSION['descricao'] = $_POST['descricao'];

        $target_dir = "../assets/uploads/";
        $target_file = $target_dir . basename($_FILES["imagem"]["name"]);
        $uploadOk = 1;
        $FileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        if ($_FILES["imagem"]["size"] > 10000000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }

        if($FileType != "jpg" && $FileType != "png" && $FileType != "jpeg") {
            echo "Sorry, only PDF files are allowed."; 
            $uploadOk = 0;
        }

        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["imagem"]["tmp_name"], $target_file)) {
                $_SESSION['imagem'] = htmlspecialchars( basename( $_FILES["imagem"]["name"]));

            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }

        header("location: ../models/model_addDenuncia.php");
        
    }
?>