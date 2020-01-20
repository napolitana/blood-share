<?php
include("conecta.php");
 $gambi = " ";
 $emails = $_POST['data_email'];
 foreach ($emails as $email){
   $gambi = $gambi . " " . $email;
 }
 echo $gambi;
?>
