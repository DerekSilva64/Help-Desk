<?php require_once "validador_acesso.php"; ?>

<!DOCTYPE html>

<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Help desk - Home</title>

        <script src="https://kit.fontawesome.com/7b410f1d89.js" crossorigin="anonymous"></script>

        <style>
            <?php include('css/normalize.css'); ?>
            <?php include('css/style_home.css'); ?>
        </style>

    </head>

    <body>

        <header class="menu">
            
            <div class="logo">
                <img src="imgs/logo.png" alt="Logo">
                <h4>Help Desk Atendimento</h4>
            </div>
            
            <a class="logout-link" href="logout.php">Sair</a>

        </header>
        
        <main class="container">
            
            <div class="img-home">
                <img src="imgs/call_center02.png" alt="Imagem home">
            </div>

            <div class="services">

                <div class="box">

                    <h2>Como podemos ajudar-lo?</h2>
                    
                    <div class="service">

                        <div class="text">
                            <h4>Abrir chamado</h4>
                            <p>Abra um chamado para que possamos 
                                atendê-lo e solicionar seu problema.
                            </p>
                        </div>

                        <div class="img-btn">
                            <a href="abrir_chamado.php"><img src="imgs/formulario_abrir_chamado.png" alt="Imagem link abrir"></a>
                        </div>

                    </div>

                    <div class="service">
                        <div class="text">
                            <h4>Consultar chamado</h4>
                            <p>Veja o andamento do
                                chamado que você realizou.
                            </p>
                        </div>

                        <div class="img-btn">
                            <a href="consultar_chamado.php"><img src="imgs/formulario_consultar_chamado.png" alt="Imagem link consultar"></a>
                        </div>
                        
                    </div>

                </div>

            </div>

        </main>

        <script src="js/script.js"></script>

    </body>

</html>