<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/style.css">
    <title>Galeria | Infonature</title>
</head>
<body>
    
    <?php include "view/header.php"; ?>

    <div id="sobre" class="tab">
    <div class="content"> 

        <table border='1' cellpadding='10' class="table-galery">

            <tr class="tr-galery">
                <th class="th-galery">Imagem</th>
                <th class="th-galery">Tipo da Denúncia</th>
                <th class="th-galery">Descrição</th>
            </tr>

            <?php
            require "config/connect.php";

            $sql = "SELECT * FROM denuncias_tb";
            $result = $conn->query($sql);

            if($result->num_rows == 0) {

                echo "Não há denúncias registradas!";
                
            } else {

                while($row = $result->fetch_assoc()) {

        ?>
                <tr>
                    <td style="width: 200px; height: 200px" class="td-galery"><img style="width: 100%; height: 50%" src="assets/uploads/<?= $row['imagem'] ?>" alt=""></td>
                    <td class="td-galery"><?= $row['tipo_denuncia'] ?></td>
                    <td class="td-galery"><?= $row['descricao'] ?></td>
                </tr>
        <?php
                
                }
                
            }
            ?>
        
        </table>

    </div> 
    </div> 


    <?php include "view/footer.php"; ?>
    
</body>
</html>