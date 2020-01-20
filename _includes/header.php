<?php
//Iniciando a sessão:
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta property="og:image" content="">
    <meta property="og:description" content="O site Blood Share é uma plataforma onde estudantes da Universidade do Estado de Minas Gerais
    - campus Passos se cadastram para receber notificações em seu e-mail quando o Hemominas (Núcleo Regional de Passos) necessita do
    mesmo tipo sanguíneo do estudante.">
    <meta property="og:title" content="Blood Share">
    <title>Blood Share</title>
    <link rel="stylesheet" href="css/components/bootstrap.min.css">
    <link rel="stylesheet" href="css/components/datatables.min.css" type="text/css" />
    <link rel="stylesheet" href="css/components/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="ccss/components/sweetalert2.min.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container">
                <a class="navbar-brand" href="../bloodShare/index.php">
                    <img src="img/img-logo.png" class="d-inline-block align-top" alt="Logo do site BloodShare" width="30" height="30"> BloodShare
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0"></ul>
                    <ul class="navbar-nav my-2 my-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" id="agendarDoacao" target="_blank" href="https://www.mg.gov.br/conteudo/agendamento-online/doar-sangue">Agende sua doação</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="condicoesParaDoar" target="_blank" href="http://www.hemominas.mg.gov.br/doacao-e-atendimento-ambulatorial/doacao-de-sangue/condicoes-e-restricoes">Condições e restrições</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link scrollSuave" href="#idCadastro">Cadastre-se </a>
                        </li>
                        <!-- <li class="nav-item">
                            <button type="button" class="btn" data-toggle="modal" data-target="#loginModal">
                                Login
                            </button>
                            <div class="modal fade float-right" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="loginModalLabel">Entrar</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="form-group row">
                                                    <label for="headerEmail" class="col-sm-2 col-form-label">Email</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" readonly class="form-control" id="headerEmail" placeholder="email@example.com">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="headerPassword" class="col-sm-2 col-form-label">Senha</label>
                                                    <div class="col-sm-10">
                                                        <input type="password" class="form-control" id="headerPassword" placeholder="Senha">
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-secondary float-right">Entrar</button>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link scrollSuave" href="#idContato">Contato</a>
                        </li>
                        <?php
                          if((isset ($_SESSION['login']) == true) and (isset ($_SESSION['senha']) == true))
                          {
                            echo '<li class="nav-item">
                                    <a class="nav-link" href="_includes_adm/logout.php" value="Sair" >Sair</a>
                                  </li>';
                          }

                        ?>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
