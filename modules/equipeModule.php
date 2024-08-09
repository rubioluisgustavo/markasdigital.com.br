<?php


if ($_REQUEST['action'] && $_REQUEST['action'] == 'apagar' && $_REQUEST['id']) {
    $jsonFile = ('../data/equipeData.json');

    if (isset($_GET['id'])) {
        $idToRemove = (int)$_GET['id'];
        $jsonData = file_get_contents($jsonFile);
        $menuItems = json_decode($jsonData, true);
        $itemFound = false;

        foreach ($menuItems as $key => $item) {
            if ($item['id'] == $idToRemove) {
                unset($menuItems[$key]);
                $itemFound = true;
                break;
            }
        }

        if ($itemFound) {
            $menuItems = array_values($menuItems);
            $newJsonData = json_encode($menuItems, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
            if (file_put_contents($jsonFile, $newJsonData)) {
                header('Location: ../admin/index.php');
            } else {
                echo "Erro ao salvar as alterações.";
            }
        } else {
            echo "Item com ID especificado não encontrado.";
        }
    } else {
        echo "ID do item a ser removido não foi especificado.";
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = ($_POST['name']);
    $role = ($_POST['role']);
    $city = ($_POST['city']);

    $jsonFile = ('../data/equipeData.json');
    $jsonData = file_get_contents($jsonFile);
    $menuItems = json_decode($jsonData, true);
    $nextKey = count($menuItems);

    $newItem  = [
        'id' => $nextKey,
        'name' => $name,
        'role' => $role,
        'city' => $city
    ];

    $menuItems[$nextKey] = $newItem;
    $newJsonData = json_encode($menuItems, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);


    file_put_contents($jsonFile, $newJsonData);
    header('Location: ../admin/index.php');
    exit;
} else {
    echo 'Método de requisição inválido.';
}
