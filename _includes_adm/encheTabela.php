<?php
    include("_includes\conecta.php");
    include("_includes\mascaras.php");
    $vetpessoas = RetornaPessoas();
    if ($vetpessoas != NULL) {
        foreach ($vetpessoas as $pessoa) {
            $idpessoa = $pessoa['ID'];
            $nome = $pessoa['nome'];
            $sobrenome = $pessoa['sobrenome'];
            $dataDeNascimento = $pessoa['dataDeNascimento'];
            $cpf = $pessoa['cpf'];
            $email = $pessoa['email'];
            $telefone = $pessoa['telefone'];
            $tipoSanguineo = $pessoa['tipoSanguineo'];
            echo '<tr> <td>'.$nome." ".$sobrenome.'</td> <td>'.date('d/m/Y', strtotime($dataDeNascimento)).'</td>
                  <td>'.mask($cpf,'###.###.###-##').'</td> <td>'.$email.'</td> <td>'.mask($telefone, '(##) #####-####').'</td> <td>'.$tipoSanguineo.'</td> </tr>';

                  /*echo '<tr> <td>'.$nome.'</td> <td>'.$sobrenome.'</td> <td>'.$dataDeNascimento.'</td>
                  <td>'.$cpf.'</td> <td>'.$email.'</td> <td>'.$telefone.'</td> <td>'.$tipoSanguineo.'</td>
                  <td><a href="formpessoa.php?id='. $pessoa['ID'].'" class="btn btn-primary">Alterar</a>
                  <a href="excluir.php?id='.$idpessoa.'" class="btn btn-danger"
                  onclick="return confirm(\'Deseja excluir?\');">Excluir</a> </td> </tr>'; */

                } // fecha foreach
            } // fecha if
    else { echo "<tr><td>Nenhum registro encontrado!</td></tr>"; }
?>
