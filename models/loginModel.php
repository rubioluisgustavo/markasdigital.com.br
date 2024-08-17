<?php

class LoginModel
{

    public function logar($data)
    {

        $user = ($data['user']);
        $password = md5($data['password']);

        // Lê o conteúdo do JSON
        $json_string = file_get_contents('../data/equipeData.json');
        // Decodifica o JSON em um array associativo
        $usuarios_array = json_decode($json_string, true);

        // Verifica se a decodificação foi bem-sucedida
        if ($usuarios_array && isset($usuarios_array['usuarios'])) {
            $usuarios = $usuarios_array['usuarios'];

            // Percorre a lista de usuários
            foreach ($usuarios as $usuario) {

                if ($usuario['user'] == $user && $usuario['password'] == $password) {
                    return true;
                } else {
                    $return = false;
                }
            }

            return $return;
        } else {
            echo "Erro ao ler o arquivo JSON.";
        }
    }
}
