<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $uploadDir = '../uploads/';

    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0755, true);
    }

    if (isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
        $uploadFile = $uploadDir . basename($_FILES['image']['name']);

        if (!move_uploaded_file($_FILES['image']['tmp_name'], $uploadFile)) {
            die('Erro ao fazer o upload da imagem.');
        }
    } else {
        die('Nenhuma imagem foi enviada.');
    }

    $title = ($_POST['title']);
    $content1 = ($_POST['content1']);
    $content2 = ($_POST['content2']);
    $imageName = basename($_FILES['image']['name']);

    $data = [
        'title' => $title,
        'content1' => $content1,
        'content2' => $content2,
        'image' => $imageName
    ];

    $jsonFile = '../data/servicosData.json';
    file_put_contents($jsonFile, json_encode($data));

    header('Location: ../servicos.php');
    exit;
} else {
    echo 'Método de requisição inválido.';
}
