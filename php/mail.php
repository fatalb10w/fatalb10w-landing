<?php 

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$name = $_POST['user_name']; 
$phone = $_POST['user_phone'];
$text = $_POST['user_message'];
//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->setFrom('shadrin-serzh@internet.ru'); // от кого будет уходить письмо?
$mail->addAddress('Deifordhaze@gmail.com');     // Кому будет уходить письмо 
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Заявка с сайта';
$mail->Body    = '' .$name . ' оставил заявку! Телефон: '.$phone."\n Сообщение: ". $text;

if(!$mail->send()) {
    echo 'Error';
} else {
    echo 'success';
}
?>