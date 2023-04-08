<!DOCTYPE html>

<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Help desk - Login</title>

        <script src="https://kit.fontawesome.com/7b410f1d89.js" crossorigin="anonymous"></script>

        <style>
            <?php include('css/normalize.css'); ?>
            <?php include('css/style_registro.css'); ?>
        </style>
        
    </head>

    <body>
        
        <header class="menu">

            <div class="logo">
                <img src="imgs/logo.png" alt="Logo">
                <h4>Help Desk Atendimento</h4>
            </div>
            
        </header>

        <main class="container">

                <div class="input-register">
                    
                    <form class="form-box" action="registrar_usuario.php" method="POST">

                        <h2>Registrar-se</h2>

                        <div class="input-box">
                            <i class="fa-solid fa-user"></i>
                            <input name="usuario" type="text" autocomplete="off" autofocus required>
                            <label>Usuário</label>
                        </div>

                        <div class="input-box">
                            <i class="fa-solid fa-envelope"></i>
                            <input name="email" type="email" autocomplete="off" autofocus required>
                            <label>Email</label>
                        </div>

                        <?php if(isset($_GET['registro']) && $_GET['registro'] == 'erro1') { ?>
                        <p class="error-mensage">*Este email já é cadastrado.</p>
                        <?php } ?>

                        <div class="input-box">
                            <i class="fa-solid fa-lock"></i>
                            <input name="senha" type="password" required>
                            <label>Senha</label>
                        </div>

                        <div class="terms">
                            <label><input name="terms" type="checkbox" required>Concordo com os termos</label>
                            <a href="#">Ler termos</a>
                        </div>

                        <button type="submit" class="btn-login">Registrar</button>

                        <p class="register-p">Já tem uma conta? <a href="index.php" class="link-register">Logar</a></p>

                    </form>

                </div>

                <div class="img-register">

                    <img src="imgs/call_center01.png" alt="Imagem de login">

                </div>

        </main>
        
        <script src="js/script.js"></script>

    </body>

</html>