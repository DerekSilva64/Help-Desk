<?php require_once "validador_acesso.php"; ?>

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
            <?php include('css/style_ac.css'); ?>
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

                <form class="form-box" action="registrar_chamado.php" method="post">

                    <h2>Abrir chamado</h2>
                    
                    <div class="input-text">
                        <label for="titulo">Título</label>
                        <input name="titulo" type="text" autocomplete="off" required>
                    </div>

                    <div class="input-text">
                        <label for="categoria">Categoria</label>
                        <select name="categoria" required>
                            <option value="hardware">Hardware</option>
                            <option value="software">Software</option>
                            <option value="internet">Internet</option>
                            <option value="outros">Outros</option>
                        </select>
                    </div>

                    <div class="input-text">
                        <label for="descricao">Descrição</label>
                        <textarea name="descricao" cols="30" rows="10" required></textarea>
                    </div>

                    <div class="btns">
                        <a href="home.php">Voltar</a>
                        <button>Abrir</button>
                    </div>

                </form>

            </div>
            
        </main>

        <script src="js/script.js"></script>

    </body>

</html>