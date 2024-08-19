<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $content1 = ($_POST['content1']);

    $data = [
        'content1' => $content1
    ];

    $jsonFile = '../data/solucoesData.json';
    file_put_contents($jsonFile, json_encode($data));

    header('Location: ../solucoes.php');
    exit;
} else {
    echo 'Método de requisição inválido.';
}
