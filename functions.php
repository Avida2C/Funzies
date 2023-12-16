<?php
require 'connection.php'; 


$pattern ['name']='/^[a-z A-Z]/';
$pattern ['email']='/^([a-z\d\.-]+)@([a-z\d-]+)\.([a-z]{2,4})(\.[a-z]{2,4})?$/';
$pattern ['subject']='/^[a-z A-Z\d]{5,30}$/';

//Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
        //Load Composer's autoloader
        require 'vendor/autoload.php';
    
function Mailer($email, $name, $subject, $message)
{
    //Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer(true);
     
    try {
        //Enable verbose debug output
        $mail->SMTPDebug = 0;//SMTP::DEBUG_SERVER;
    
        //Send using SMTP
        $mail->isSMTP();
    
        //Set the SMTP server to send through
        $mail->Host = 'smtp.gmail.com';
    
        //Enable SMTP authentication
        $mail->SMTPAuth = true;
        
        //SMTP username
        $mail->Username = 'nadinevid4l@gmail.com';

        //SMTP password
        $mail->Password = 'hsqc bveu mkgm yvqi';

        //Enable TLS encryption;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    
        //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
        $mail->Port = 587;
    
        //Recipients
        $mail->setFrom($email, $name);
    
        //Add a recipient
        $mail->addAddress('nadinevid4l@gmail.com');
    
        //Set email format to HTML
        $mail->isHTML(true);
    
        $mail->Subject = $subject;
        $mail->Body    = $message;
    
        $mail->send();
        return true;
    }
    catch (Exception $e) {
        return false;
    }
}?>
