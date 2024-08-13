<?php

$jsonFile = '../data/equipeData.json';
$data = json_decode(file_get_contents($jsonFile), true);
// include("../views/header.php");
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - equipe</title>
    <link href="../assets/css/adminStyles.css" rel="stylesheet">
</head>

<body>
    <form action="../modules/equipeModule.php" method="post" enctype="multipart/form-data">
        <h1>Adicionar membro</h1>
        <label for="title">Nome:</label>
        <input type="text" value="" name="name" id="title"><br><br>

        <label for="link">Cargo:</label>
        <input type="text" value="" name="role" id="title"><br><br>

        <label for="link">Cidade:</label>
        <input type="text" value="" name="city" id="title"><br><br>

        <button type="submit">Enviar</button>
    </form>
</body>

</html>