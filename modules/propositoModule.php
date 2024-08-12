<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $titleBlock1 = ($_POST['titleBlock1']);
    $contentBlock1 = ($_POST['contentBlock1']);
    $titleBlock2 = ($_POST['titleBlock2']);
    $contentBlock2 = ($_POST['contentBlock2']);
    $titleBlock3 = ($_POST['titleBlock3']);
    $contentBlock3 = ($_POST['contentBlock3']);


    $data = [
        'titleBlock1' =>  $titleBlock1,
        'contentBlock1' => $contentBlock1,
        'titleBlock2' =>  $titleBlock2,
        'contentBlock2' => $contentBlock2,
        'titleBlock3' =>  $titleBlock3,
        'contentBlock3' => $contentBlock3,
    ];

    $jsonFile = '../data/propositoData.json';
    file_put_contents($jsonFile, json_encode($data));

    header('Location: ../proposito.php');
    exit;
} else {
    echo 'Método de requisição inválido.';
}
