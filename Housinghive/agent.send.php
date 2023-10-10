<?php 
use PHPmailer\PHPmailer\PHPMailer;
use PHPmailer\PHPmailer\SMTP;
use PHPmailer\PHPmailer\Exception;


require 'PHPMailer/PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer/PHPMailer.php';
require 'PHPMailer/PHPMailer/SMTP.php';

if(isset($_POST["sub"])){
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com'; // SMTP server
    $mail->SMTPAuth = true;
    $mail->Username = "huzaifaarain424@gmail.com";
	$mail->Password = "mnnylwwzgmgjkbvq";
    $mail->SMTPSecure = 'ssl'; // Encryption (ssl or tls)
    $mail->Port = 465; // for ssl
    // $mail->Port = 587; // for tls

    //Recipients
    $mail->SetFrom("huzaifaarain424@gmail.com");
    $mail->addAddress($_POST["email"]);
    
    // Content
    $mail->isHTML(true); // Set email format to HTML
    $mail->Subject = $_POST["yemail"];
    $mail->Body = $_POST["content"];

    $mail->send();
    echo '
    <script>
    alert("Email Sent Successfully Agent Will Get in touch Soon!");
    document.location.href = "agent.php"</script>
    ';


}

?>