<?php

$mail = $_POST['mail'];
$message = $_POST['message'];
$error ='';
if(trim($mail)=='')
    $error = 'Proszę wpisać mail';
else if(trim($message)=='')
    $error = 'Proszę wpisać wiadomość';
else if(strlen($message) <10)
    $error ='Wiadomość powinna zawierać więcej niż 10 symboli';

if($error !=''){
    echo $error;
    exit;
}
$subject= "=?utf-8?B?".base64_encode("wiadomosc")."?=";
$headers="From: $mail\r\nReply-to: $mail\r\nContent-type: text/html;charset=utf-8\r\n";
mail('masha2096@gmail.com', $subject, $message, $headers);
header("Location: about.php");
?>