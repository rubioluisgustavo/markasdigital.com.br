<?php

require_once '../models/indexModel.php';

$model = new IndexModel();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = [
        'content' => $_POST['content'],
        'image' => $_FILES

    ];

    if ($data) {
        $model->save($data);
    }
}
