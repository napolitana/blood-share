<?php

$emails = $_POST['data_email'];
$erro = false;
//$GAMBI = '';
foreach ((array) $emails as $email) {
    enviarEmail($email);
    //$GAMBI = $GAMBI . ' ' . $email;
}

//echo $GAMBI;
function enviarEmail($from){
//Variáveis
/*$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$opcoes = $_POST['escolhas'];
$mensagem = $_POST['msg'];
$data_envio = date('d/m/Y');
$hora_envio = date('H:i:s');*/

require_once('class.phpmailer.php'); //chama a classe de onde você a colocou.
require_once("PHPMailerAutoload.php");

$mail = new PHPMailer(); // instancia a classe PHPMailer

$mail->SMTPOptions = array(
    'ssl'=> array(
    'verify_peer' => false,
    'verify_peer_name' => false,
    'allow_self_signed' => true
  )
);

$mail->IsSMTP();

//configuração do gmail
$mail->Port = '587'; //porta usada pelo gmail.
$mail->Host = 'smtp.gmail.com'; 
$mail->IsHTML(true); 
$mail->Mailer = 'smtp'; 
$mail->SMTPSecure = 'tls';

//configuração do usuário do gmail
$mail->SMTPAuth = true; 
$mail->Username = 'paexbloodshare@gmail.com'; // usuario gmail.   
$mail->Password = 'paex2019'; // senha do email.

$mail->SingleTo = true; 

// configuração do email a ser enviado.
$mail->From = 'paexbloodshare@gmail.com'; 
$mail->FromName = "BLOODSHARE"; 

$mail->setFrom($from);
$mail->addAddress($from); // email do destinatario.

$mail->Subject = "Aqui vai o assunto do email, pode vim atraves de variavel."; 
$mail->Body = "Aqui vai a mensagem, que tambem pode vim por variavel.";

if (!$mail->Send()) {
    $erro = true;
    //echo "Erro ao enviar Email:" . $mail->ErrorInfo; //Debug
}
}

if($erro){
    echo 'erro';
}else{
    echo 'ok';
}

?>