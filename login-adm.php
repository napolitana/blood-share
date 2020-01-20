<?php
session_start();
?>
    <!DOCTYPE html>
    <html lang="pt-br" dir="ltr">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta property="og:image" content="">
        <meta property="og:description" content="O site Blood Share é uma plataforma onde estudantes da Universidade do Estado de Minas Gerais
    - campus Passos se cadastram para receber notificações em seu e-mail quando o Hemominas (Núcleo Regional de Passos) necessita do
    mesmo tipo sanguíneo do estudante.">
        <meta property="og:title" content="Blood Share">
        <title>Blood Share - Login</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="css/sweetalert2.min.css">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    </head>

    <body>
        <div class="login d-flex f-nowrap s-between ">
            <div class="login-img">
                <img src="img/login-img.jpg" alt="">
            </div>
            <div class="form-login d-flex f-wrap">
                <div class="hold-form">
                    <div class="login-title">
                        <h1>Acessar </h1>
                        <div></div>
                    </div>
                    <?php
            					if(isset($_SESSION['msg'])){
            						echo $_SESSION['msg'];
            						unset($_SESSION['msg']);
            					}
				            ?>
                    <form action="_includes_adm/login.php" method="POST" name="formLogin">
                        <div class="d-flex f-wrap">
                            <span>Usuário:</span>
                            <input type="text" name="login">
                        </div>
                        <div class="d-flex f-wrap">
                            <span>Senha:</span>
                            <input type="password" name="senha">
                        </div>
                        <input class="btn-entrar" type="submit" name="entrar" value="Entrar">
                    </form>
                </div>
            </div>
        </div>
    </body>

    </html>
