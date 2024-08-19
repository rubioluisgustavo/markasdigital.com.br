<?php 

$jsonFile = '../data/servicosData.json';
$data = json_decode(file_get_contents($jsonFile), true); 

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Serviços</title>
    <link href="../assets/css/adminStyles.css" rel="stylesheet">
</head>

<body>
    <form action="../controllers/servicosController.php" method="post" enctype="multipart/form-data">
        <h1>Serviços</h1>

        <label for="content">Conteúdo 1:</label>
        <textarea required name="content1" id="content1" rows="20" cols="50"><?php echo $data['content1']; ?></textarea><br><br>

        <label for="image">Imagem:</label>
        <input type="file" name="image" id="image" required accept="image/*"><br><br>

        <button type="submit">Enviar</button>
    </form>
</body>

</html>