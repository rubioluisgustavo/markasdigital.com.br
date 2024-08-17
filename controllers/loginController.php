<?php

require_once '../models/loginModel.php';

$model = new LoginModel();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = $_POST['user'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($user && $password) {
        $return = $model->logar(['user' => $user, 'password' => $password]);
        if ($return) {
            header("Location: ../admin/painel.php?login=true");
            exit();
        } else {
            header("Location: ../admin/index.php?login=false");
            exit();
        }
    }
}
