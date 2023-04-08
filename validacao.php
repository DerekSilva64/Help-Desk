<?php

    session_start();

    $usuario_valido = false;
    $usuario = array(
        array('id' => 0, 'perfil_id' => 1, 'email' => 'suco@gmail.com', 'senha' => '123456', 'usuario' => 'suco'),
        array('id' => 1, 'perfil_id' => 1, 'email' => 'agua@gmail.com', 'senha' => '123456', 'usuario' => 'Água'),
        array('id' => 2, 'perfil_id' => 2, 'email' => 'adm@gmail.com', 'senha' => '123456', 'usuario' => 'ADM'),
        array('id' => 3, 'perfil_id' => 2, 'email' => 'derek@gmail.com', 'senha' => '123456', 'usuario' => 'Derek')
    );

    foreach($usuario as $user) {
        if($user['email'] === $_POST['email'] && $user['senha'] === $_POST['senha']) {
            $usuario_valido = true;
            break;
        }
    }
    
    if($usuario_valido === true) {
        $_SESSION['validacao'] = 'sim';
        $_SESSION['id'] = $user['id'];
        $_SESSION['perfil_id'] = $user['perfil_id'];
        header('Location: home.php?id='. $_SESSION['id']);
    } else {
        $_SESSION['validacao'] = 'nao';
        header('Location: index.php?login=erro1');
    }

?>