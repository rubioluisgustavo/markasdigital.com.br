<?php 

$jsonFile = '../data/solucoesData.json';
$data = json_decode(file_get_contents($jsonFile), true); 

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Soluções</title>
    <link href="../assets/css/adminStyles.css" rel="stylesheet">
</head>

<body>
    <form action="../modules/solucoesModule.php" method="post" enctype="multipart/form-data">
        <h1>Soluções</h1>

        <label for="content">Conteúdo:</label>
        <textarea name="content1" id="content1" rows="20" cols="50"><?php echo $data['content1']; ?></textarea><br><br>

        <button type="submit">Enviar</button>
    </form>
</body>

</html>