<?php

require 'vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

//require 'phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';


if(isset($_POST['send'])){
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->HOST = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'ghostbmer@gmail.com';//your gmail
    $mail->Password = 'ntuqjasrrqsxwagp';//app password
    $mail->SMTPSecure = 'ssl';
    $mail->PORT = 465;

    $mail->setFrom('ghostbmer@gmail.com');//your gmail

    $mail->addAddress($_POST['email']);

    $mail->isHTML(true);

    $mail->Subject = $_POST['subject'];

    $mail->Body = $_POST['message'];


    $mail->send();

    echo "
    <script>
    alert('Mail sent successfully..');
    document.location.href = 'index.php';
</script>
    ";
}


?>