<?php require_once "validador_acesso.php"; ?>
<?php

    $chamados = array();
    $chamadoItens = array();

    $arquivo = fopen('registro.hd', 'r');

    while(!feof($arquivo)) {
        $chamadoItens['id'] = fgets($arquivo);
        $chamadoItens['titulo'] = fgets($arquivo);
        $chamadoItens['categoria'] = fgets($arquivo);
        $chamadoItens['descricao'] = fgets($arquivo);
        $chamados[] = $chamadoItens;
    }
    fclose($arquivo);

?>

<!DOCTYPE html>

<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Help Desk - Abrir chamado</title>
        
        <script src="https://kit.fontawesome.com/7b410f1d89.js" crossorigin="anonymous"></script>

        <style>
            <?php include('css/normalize.css'); ?>
            <?php include('css/style_cc.css'); ?>
        </style>

    </head>

    <body>

    <header>
            
            <div class="logo">
                <img src="imgs/logo.png" alt="Logo">
                <h4>Help Desk Atendimento</h4>
            </div>
            
            <a class="logout-link" href="logout.php">Sair</a>

        </header>
        
        <main class="container">

            <div class="box">

                    <h2>Consultar chamado</h2>
                    
                    <div class="box-chamado">

                    <?php foreach($chamados as $chamado) { 
                        if(($_SESSION['perfil_id'] == 1 && $_SESSION['id'] != $chamado['id']) || $chamado['id'] == '') {
                            continue;
                        }
                    ?>

                            <div class="chamado">
                                <p><h4>Título:</h4> <?php echo $chamado['titulo'] ?></p>
                                <p><h4>Categoria:</h4> <?php echo $chamado['categoria'] ?></p>
                                <p><h4>Descrição:</h4> <?php echo $chamado['descricao'] ?></p>
                            </div>

                    <?php } ?>

                    </div>

                    <div class="btns">
                        <a href="home.php">Voltar</a>
                        <a href="abrir_chamado.php">Abrir chamado</a>
                    </div>

            </div>
            
        </main>

        <script src="js/script.js"></script>

    </body>

</html>