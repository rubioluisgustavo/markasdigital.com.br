<?php

$jsonFile = '../data/contatoData.json';
$data = json_decode(file_get_contents($jsonFile), true);

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Login</title>
    <link href="../assets/css/adminStyles.css" rel="stylesheet">
    <?php include("../views/scripts.php"); ?>
</head>

<body>
    <form action="../controllers/loginController.php" method="post" enctype="multipart/form-data">
        <h1>Login</h1>
        <label for="title">login:</label>
        <input required type="text" name="user"><br><br>

        <label for="content">senha:</label>
        <input required type="text" name="password"><br><br>

        <button type="submit">logar</button>
    </form>
</body>

</html>

<script>
    $(document).ready(function() {
        $('#phone').mask("+00 (00) 00000-0000")
    })
</script>

<?php
error_reporting(0);
if ($_REQUEST['login'] && $_REQUEST['login'] == 'false') {
?> <script>
        $(document).ready(function() {
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "login ou senha inválidos!",
            });
        })
    </script><?php
            }

                ?>