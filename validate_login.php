<?php
    session_start();

    $user_verified = false;
    $user_id = null;
    $profiles = array(1 => 'Administrador', 2 => 'Usuário');
    $user_profile_id = null;

    $users_app = array(
        array('id' => 1, 'email' => 'adm@biopharmus.com.br', 'password' => 'adm', 'profile_id' => 1),
        array('id' => 2, 'email' => 'leonardo.gazio@biopharmus.com.br', 'password' => '123', 'profile_id' => 2),
        array('id' => 3, 'email' => 'lais.augusto@biopharmus.com.br', 'password' => '321', 'profile_id' => 2),
        array('id' => 4, 'email' => 'pedro.cardoso@biopharmus.com.br', 'password' => '000', 'profile_id' => 1)
    );

    foreach($users_app as $user) {
        if ($user['email'] == $_POST['email'] &&  $user['password'] == $_POST['password']) {
            $user_verified = true;
            $user_id = $user['id'];
            $user_profile_id = $user['profile_id'];
        }
    }

    if ($user_verified) {
        $_SESSION['authenticated'] = 'YES';
        $_SESSION['id'] = $user_id;
        $_SESSION['profile_id'] = $user_profile_id;
        header('Location: home.php');
    }
    else {
        $_SESSION['authenticated'] = 'NO';
        header('Location: index.php?login=error');
    }
