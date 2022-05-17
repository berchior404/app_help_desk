<?php

    $user_verified = false;

    $users_app = array(
        array('email' => 'adm@teste.com.br', 'password' => '123456'),
        array('email' => 'user@teste.com.br', 'password' => 'abcd')
    );

    foreach($users_app as $user) {
        if ($user['email'] == $_POST['email'] &&  $user['password'] == $_POST['password']) {
            $user_verified = true;
        }
    }

    if ($user_verified) {
        echo('Usuário autenticado');
    }
    else {
        header('Location: index.php?login=erro');
    }

    ?>


   
