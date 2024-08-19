<?php

require_once '../models/loginModel.php';

$model = new LoginModel();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = $_POST['user'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($user && $password) {
        $model->login(['user' => $user, 'password' => $password]);
    }
}
