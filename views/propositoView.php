<?php 

$jsonFile = '../data/propositoData.json';
$data = json_decode(file_get_contents($jsonFile), true); 

?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - propósito</title>
    <link href="../assets/css/adminStyles.css" rel="stylesheet">
</head>

<body>
    <form action="../controllers/propositoController.php" method="post" enctype="multipart/form-data">
        <h1>Propósito</h1>

        <label for="content">Quadrado 1 - título:</label>
        <textarea name="titleBlock1" id="content" rows="4" cols="50"><?php echo $data['titleBlock1']; ?></textarea><br><br>

        <label for="content">Quadrado 1 - conteúdo:</label>
        <textarea name="contentBlock1" id="content" rows="4" cols="50"><?php echo $data['contentBlock1']; ?></textarea><br><br>

        <label for="content">Quadrado 2 - título:</label>
        <textarea name="titleBlock2" id="content" rows="4" cols="50"><?php echo $data['titleBlock2']; ?></textarea><br><br>

        <label for="content">Quadrado 2 - conteúdo:</label>
        <textarea name="contentBlock2" id="content" rows="4" cols="50"><?php echo $data['contentBlock2']; ?></textarea><br><br>

        <label for="content">Quadrado 3 - título:</label>
        <textarea name="titleBlock3" id="content" rows="4" cols="50"><?php echo $data['titleBlock3']; ?></textarea><br><br>

        <label for="content">Quadrado 3 - conteúdo:</label>
        <textarea name="contentBlock3" id="content" rows="4" cols="50"><?php echo $data['contentBlock3']; ?></textarea><br><br>

        <button type="submit">Enviar</button>
    </form>
</body>

</html>