<?php
// session_start inicia a sessão
session_start();

include("../_includes/conecta.php");

$login = $_POST['login'];
$senha = $_POST['senha'];

$result = validaLogin($login, $senha);

if($result == true){
    $_SESSION['login'] = $login;
    $_SESSION['senha'] = $senha;
    header('Location: ../index-adm.php');
}else{
    unset ($_SESSION['login']);
    unset ($_SESSION['senha']);
    $_SESSION['msg'] = "<div class='alert alert-danger'>Usuário ou senha inválidos!</div>";
    header('Location: ../login-adm.php');
}

?>
