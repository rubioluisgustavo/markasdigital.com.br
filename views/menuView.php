<?php

$jsonFile = '../data/menuData.json';
$data = json_decode(file_get_contents($jsonFile), true);
// include("../views/header.php");
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - menus</title>
    <link href="../assets/css/adminStyles.css" rel="stylesheet">
</head>

<body>
    <form action="../controllers/menuController.php" method="post" enctype="multipart/form-data">
        <h1>menus</h1>

        <label for="link">Link:</label>
        <input type="text" value="" name="href" id="title"><br><br>

        <label for="active">Ativo:</label>
        <select class="form-select" name="active">
            <option value="sim">sim</option>
            <option value="não">não</option>
        </select>

        <button type="submit">Enviar</button>
    </form>
</body>

</html>