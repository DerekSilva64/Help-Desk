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
            <?php include('css/style.css'); ?>
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

                <div class="input-login">
                    
                    <form class="form-box" action="validacao.php" method="post">

                        <h2>LOGIN</h2>

                        <div class="input-box">
                            <i class="fa-solid fa-envelope"></i>
                            <input name="email" type="email" autocomplete="off" autofocus required>
                            <label>Email</label>
                        </div>

                        <div class="input-box">
                            <i class="fa-solid fa-lock"></i>
                            <input name="senha" type="password" required>
                            <label>Senha</label>
                        </div>

                        <?php if(isset($_GET['login']) && $_GET['login'] == 'erro1') { ?>
                        <p class="error-mensage">*Senha ou usuário incorreto.</p>
                        <?php } else if(isset($_GET['login']) && $_GET['login'] == 'erro2') { ?>
                        <p class="error-mensage">*É necessário logar primeiro.</p>
                        <?php } ?>
                        <div class="remember">
                            <label><input name="remember" type="checkbox">Lembre-me</label>
                            <a href="#">Esqueceu a senha?</a>
                        </div>

                        <button type="submit" class="btn-login">Login</button>

                        <p class="register-p">Não tem uma conta? <a href="registrar.php" class="link-register">Registrar-se</a></p>

                    </form>

                </div>

                <div class="img-login">

                    <img src="imgs/call_center01.png" alt="Imagem de login">

                </div>

        </main>
        
        <script src="js/script.js"></script>

    </body>

</html>