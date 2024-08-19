<?php

class IndexModel
{

    public function save($data)
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $uploadDir = '../uploads/';
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0755, true);
            }

            if (isset($data['image']) && $data['image']['error'] == UPLOAD_ERR_OK) {

                $uploadFile = $uploadDir . $data['image']['image']['name'];

                if (!move_uploaded_file($_FILES['image']['tmp_name'], $uploadFile)) {
                    die('Erro ao fazer o upload da imagem.');
                }

                $dataToSave = [
                    'content' => $data['content'],
                    'image' => $data['image']['image']['name']
                ];

                // var_dump($dataToSave);
                // exit;

                $jsonFile = '../data/indexData.json';
                file_put_contents($jsonFile, json_encode($dataToSave));
                header('Location: ../index.php');
                exit;
            } else {
                echo 'Método de requisição inválido.';
            }
        }
    }
}
