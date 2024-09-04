<?php
session_start();
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

//Load Composer's autoloader
require 'vendor/autoload.php';

// loading file .env
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

if (isset($_POST['submitContact'])) {

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $animal = $_POST['animal'];
    $message = $_POST['message'];


    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->isSMTP();                                            //Send using SMTP
        $mail->SMTPAuth = true;                                   //Enable SMTP authentication

        $mail->Host = $_ENV['SMTP_HOST'];                              //Set the SMTP server to send through
        $mail->Username = $_ENV['SMTP_USERNAME'];                     //SMTP username
        $mail->Password = $_ENV['SMTP_PASSWORD'];                     //SMTP password

        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
        $mail->Port = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        //$mail->Port       = 465;    


        //Recipients
        $mail->setFrom($_ENV['SMTP_USERNAME'], 'Contact garde animaux');
        $mail->addAddress($_ENV['SMTP_USERNAME'], 'Contact garde animaux');     //Add a recipient

        // $mail->addAddress('ellen@example.com');               //Name is optional
        // $mail->addReplyTo('info@example.com', 'Information');
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');

        //Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Nouvelle demande pour animaux';
        $mail->Body =
            '<h3>Bonjour, vous avez recu une nouvelle demande</h3>
            <h4>Prenom :' . $first_name . '</h4>
            <h4>Nom : ' . $last_name . '</h4>
            <h4>Telephone : ' . $phone . '</h4>
            <h4>Email : ' . $email . '</h4>
            <h4>Animal : ' . $animal . '</h4>
            <h4>Message : ' . $message . '</h4>';

        if ($mail->send()) {
            $_SESSION['status'] = "Merci pour votre message, je vous contacterai rapidement";
            header("Location: {$_SERVER["HTTP_REFERER"]}");
            exit(0);
        } else {
            $_SESSION['status'] = "Erreur message non envoyé. Mail erreur : {$mail->ErrorInfo}";
            header("Location: {$_SERVER["HTTP_REFERER"]}");
            exit(0);
        }

    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    header('Location; index.php');
    exit(0);
}
