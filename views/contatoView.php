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
    <?php include("../views/scripts.php"); ?>
</head>

<body>
    <form action="../controllers/contatoController.php" method="post" enctype="multipart/form-data">
        <h1>Contato</h1>
        <label for="title">Subtítulo:</label>
        <input type="text" value="<?php echo $data['subtitle']; ?>" name="subtitle" id="title"><br><br>

        <label for="content">Telefone:</label>
        <input type="text" value="<?php echo $data['phone']; ?>" name="phone" id="phone" rows="1" cols="50"><br><br>

        <label for="content">E-mail:</label>
        <textarea name="email" id="content1" rows="1" cols="50"><?php echo $data['email']; ?></textarea><br><br>

        <button type="submit">Enviar</button>
    </form>
</body>

</html>

<script>
    $(document).ready(function(){
        $('#phone').mask("+00 (00) 00000-0000")
    })
</script>