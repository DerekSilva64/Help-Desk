<?php

    session_start();
    
    $arquivo = fopen('registro.hd', 'a');

    $texto = $_SESSION['id'] . PHP_EOL . $_POST['titulo'] . PHP_EOL .$_POST['categoria'] . PHP_EOL . $_POST['descricao'] . PHP_EOL;

    fwrite($arquivo, $texto);

    fclose($arquivo);

    header('Location: abrir_chamado.php')
?>