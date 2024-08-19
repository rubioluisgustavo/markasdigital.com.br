<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $subtitle = ($_POST['subtitle']);
    $phone = ($_POST['phone']);
    $email = ($_POST['email']);

    $data = [
        'email' => $email,
        'subtitle' => $subtitle,
        'phone' => $phone
    ];

    $jsonFile = '../data/contatoData.json';
    file_put_contents($jsonFile, json_encode($data));

    header('Location: ../contato.php');
    exit;
} else {
    echo 'Método de requisição inválido.';
}
