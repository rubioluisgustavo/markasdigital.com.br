<?php

$jsonFile = '../data/indexData.json';
$data = json_decode(file_get_contents($jsonFile), true);

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - home</title>
    <link href="../assets/css/adminStyles.css" rel="stylesheet">
</head>

<body>
    <form action="../controllers/indexController.php" method="post" enctype="multipart/form-data">
        <h1>Home</h1>

        <label for="content">Conteúdo:</label>
        <textarea name="content" id="content" rows="20" cols="50"><?php echo $data['content']; ?></textarea><br><br>

        <label for="image">Imagem:</label>

        <input value="<?php echo $data['image']; ?>" type="file" name="image" id="image" accept="image/*"><br><br>

        <button type="submit">Enviar</button>
    </form>
</body>

</html>