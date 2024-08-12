<?php 

$jsonFile = '../data/contatoData.json';
$data = json_decode(file_get_contents($jsonFile), true); 

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Contato</title>
    <link href="../assets/css/adminStyles.css" rel="stylesheet">
</head>

<body>
    <form action="../modules/contatoModule.php" method="post" enctype="multipart/form-data">
        <h1>Contato</h1>
        <label for="title">Subtítulo:</label>
        <input type="text" value="<?php echo $data['subtitle']; ?>" name="subtitle" id="title"><br><br>

        <label for="content">Telefone:</label>
        <textarea name="phone" id="content1" rows="1" cols="50"><?php echo $data['phone']; ?></textarea><br><br>

        <label for="content">E-mail:</label>
        <textarea name="email" id="content1" rows="1" cols="50"><?php echo $data['email']; ?></textarea><br><br>

        <button type="submit">Enviar</button>
    </form>
</body>

</html>