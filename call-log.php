<?php
    session_start();

    $title = str_replace(';', '.', $_POST['title']);
    $category = str_replace(';', '.', $_POST['category']);
    $description = str_replace(';', '.', $_POST['description']);

    $document = fopen('call.log', 'a');
    $string = $_SESSION['id'] . ';' . $title . ';' .  $category . ';' . $description . PHP_EOL;
    fwrite($document, $string);
    fclose($document);

    header('Location: abrir_chamado.php');
