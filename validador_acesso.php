<?php
    session_start();

    if((!isset($_SESSION['validacao'])) || ($_SESSION['validacao'] == 'nao')) {
        header("Location:index.php?login=erro2");
    }
?>