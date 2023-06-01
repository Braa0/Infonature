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
    <title>Denuncias | Infonature</title>
</head>
<body>
    
    <?php include "view/header.php"; ?>

    <div id="denuncia" class="tab">

        <h1 class="title-form-den">Faça sua denúncia</h1>
        <form action="controllers/cont_addDenuncia.php" method="post" enctype="multipart/form-data" class="form-den">

                <p class="type">Tipo de denúncia</p>
                <label for="tipo_ambiental"><input type="radio" name="tipo_denuncia" value="ambiental" id="tipo_denuncia" checked>Ambiental</label>
                <label for="tipo_animal"><input type="radio" name="tipo_denuncia" value="animal" id="tipo_denuncia">Animal</label>
            
            
                <textarea maxlength="500" name="descricao" id="descricao" cols="30" rows="5" placeholder="Descreva sua denúncia aqui" class="textarea" required></textarea>

                <label for="imagem">Imagem</label>
                <input type="file" name="imagem" id="imagem" accept="image/jpg, image/png, image/jpeg" class="get-img" required>

            <button type="submit" name="btnSubmit" class="btn-send">Enviar</button>
        </form>

    </div>

    <?php include "view/footer.php"; ?>

</body>
</html>