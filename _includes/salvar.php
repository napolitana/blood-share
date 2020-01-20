<?php
include("conecta.php");

//Manter somente numeros de uma string
function soNumero($str)
{
    return preg_replace("/[^0-9]/", "", $str);
}

//Manter somente letras de uma string
function soLetra($str)
{
    return preg_replace("/[^A-Za-z]/", "", $str);
}

$id               = Trim(RetornaMaiorId());
$nome             = $_POST["txtNome"];
$sobrenome        = $_POST["txtSobrenome"];
$dataDeNascimento = $_POST["mskDataDeNascimento"];
$cpf              = Trim(soNumero($_POST["mskCpf"]));
$email            = $_POST["txtEmail"];
$telefone         = Trim(soNumero($_POST["txtTelefone"]));
$tipoSanguineo    = Trim($_POST["optTipoSanguineo"]);


InserePessoa($id, $nome, $sobrenome, $dataDeNascimento, $cpf, $email, $telefone, $tipoSanguineo);
