<?php

define("SERVIDOR", "localhost"); // endereço do servidor
define("USUARIO", "root"); // nome do usuário
define("SENHA", ""); // senha do usuário
define("BANCO", "dbBloodshare"); // nome do banco de dados

// Define e retorna a conexão com o BD
function AbreConexao()
{
    $con = new mysqli(SERVIDOR, USUARIO, SENHA, BANCO);
    return $con;
}

function InserePessoa($id, $nome, $sobrenome, $dataDeNascimento, $cpf, $email, $telefone, $tipoSanguineo)
{
    // Define o comando SQL  (insert)
    $sql     = "INSERT INTO tbl_dadosCadastrais(id, nome, sobrenome, dataDeNascimento, cpf, email, telefone, tipoSanguineo)
        VALUES ('" . $id . "', '" . $nome . "', '" . $sobrenome . "', '" . $dataDeNascimento . "', '" . $cpf . "', '" . $email . "', '" . $telefone . "',
                '" . $tipoSanguineo . "')";
    // Abre a conexão com o BD
    $conexao = AbreConexao();
    // Executa o comando SQL
    $insert  = $conexao->query($sql);
    // Verifica se registro foi inserido
    if ($insert) {
        echo "ok";
    } else {
        echo "erro";
    }
    // Fecha a conexão com o BD
    $conexao->close();
}

function AlteraPessoa($id, $nome, $sobrenome, $dataDeNascimento, $cpf, $email, $telefone, $tipoSanguineo)
{
    // Define o comando SQL  (update)
    $sql     = "UPDATE tbl_dadosCadastrais SET nome = '" . $nome . "', sobrenome = '" . $sobrenome . "',
                    dataDeNascimento = '" . $dataDeNascimento . "', cpf = '" . $cpf . "', email = '" . $email . "',
                    telefone = '" . $telefone . "', tipoSanguineo = '" . $tipoSanguineo . "' WHERE idpessoa = " . $id;
    // Abre a conexão com o BD
    $conexao = AbreConexao();
    // Executa o comando SQL
    $update  = $conexao->query($sql);
    if ($update) {
        echo "<script>location.href = '../index.php'; alert('Dados alterados com sucesso!');</script>";
    } else {
        echo "<script>location.href = '../index.php'; alert('Os dados não foram alterados!');</script>";
    }
    // Fecha a conexão com o BD
    $conexao->close();
}

function ExcluiPessoa($id)
{
    // Define o comando SQL  (delete)
    $sql     = "DELETE FROM tbl_dadosCadastrais WHERE idpessoa = " . $id;
    // Abre a conexão com o BD
    $conexao = AbreConexao();
    // Executa o comando SQL
    $delete  = $conexao->query($sql);
    if ($delete) {
        echo "<script>location.href = '../index.php'; alert('Usuário excluido com sucesso!');</script>";
    } else {
        echo "<script>location.href = '../index.php'; alert('O usuário não foi excluido!');</script>";
    }
    // Fecha a conexão com o BD
    $conexao->close();
}

function RetornaMaiorId()
{
    $sql       = "SELECT MAX(ID) + 1 AS MaiorID FROM tbl_dadoscadastrais";
    // Abre a conexão com o BD
    $conexao   = AbreConexao();
    $resultado = $conexao->query($sql);
    // Fecha a conexão com o BD
    $conexao->close();
    $registro = $resultado->fetch_assoc();

    if ($registro['MaiorID'] == null) {
        $id = 1;
    } else {
        $id = (int) $registro['MaiorID'];
    }

    //var_dump($id);
    return $id;
}

function RetornaPessoas()
{
    $sql       = "SELECT * FROM tbl_dadoscadastrais ORDER BY nome";
    $conexao   = AbreConexao(); // Abre a conexão com o BD
    $resultado = $conexao->query($sql);
    $conexao->close(); // Fecha a conexão com o BD
    if (mysqli_num_rows($resultado) > 0) {
        while ($row = mysqli_fetch_array($resultado)) {
            $pessoas[] = $row;
        }
        return $pessoas;
    } else {
        return null;
    }
}

function validaLogin($login, $senha)
{
    $sql = "SELECT * FROM tbl_usuarios WHERE login = '$login' AND senha = MD5('$senha')";
    $conexao = AbreConexao(); // Abre a conexão com o BD
    $resultado = mysqli_num_rows(mysqli_query($conexao, $sql)) or mysqli_connect_error();
    if($resultado > 0){
         return true;
         die();
     }else{
        return false;
         die();
     }
     $conexao->close(); // Fecha a conexão com o BD
}

?>
