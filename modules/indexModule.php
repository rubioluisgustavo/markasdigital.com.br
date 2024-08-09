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
    $content = ($_POST['content']);
    $imageName = basename($_FILES['image']['name']);
    $data = [
        'title' => $title,
        'content' => $content,
        'image' => $imageName
    ];

    $jsonFile = '../data/indexData.json';
    file_put_contents($jsonFile, json_encode($data));
    header('Location: ../index.php');
    exit;
} else {
    echo 'Método de requisição inválido.';
}
