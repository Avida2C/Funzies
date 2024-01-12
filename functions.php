<?php
require 'connection.php'; 

// Regex Patterns
/**
 * Regular expression patterns for various fields.
 *
 * @var array
 */
$pattern ['fullname']='/^[A-Za-z\s]+$/';
$pattern ['name']='/^[a-zA-Z]+$/';
$pattern ['surname']="/^[a-zA-Z]+$/";
$pattern ['email']='/^([a-z\d\.-]+)@([a-z\d-]+)\.([a-z]{2,4})(\.[a-z]{2,4})?$/';
$pattern ['password']="/^(?=.*[a-zA-Z])(?=.*\d)(?=.*[@$!%*?&])[a-zA-Z\d@$!%*?&]{8,}$/";
$pattern ['subject']='/^[a-z A-Z\d]{5,30}$/';
$pattern ['contactnumber']='/^\d{8}$/';


    /**
     * Import the necessary classes for using PHPMailer.
     * 
     * This code imports the PHPMailer, SMTP, and Exception classes from the PHPMailer\PHPMailer namespace.
     * It also requires the 'vendor/autoload.php' file, which is typically used for autoloading classes in a PHP project.
     */
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
        //Load Composer's autoloader
        require 'vendor/autoload.php';
    
/**
 * Sends an email using PHPMailer.
 *
 * @param string $email The recipient's email address.
 * @param string $name The recipient's name.
 * @param string $subject The subject of the email.
 * @param string $message The body of the email.
 * @return bool Returns true if the email was sent successfully, false otherwise.
 */
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
}

/**
 * Sends a password reset email to the specified email address.
 *
 * @param string $email The recipient's email address.
 * @param string $name The recipient's name.
 * @param string $subject The subject of the email.
 * @param string $message The body of the email.
 * @return bool Returns true if the email was sent successfully, false otherwise.
 */
function resetPasswordMail($email, $name, $subject, $message)
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
        $mail->setFrom('nadinevid4l@gmail.com', $name);
    
        //Add a recipient
        $mail->addAddress($email);
    
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
}

/**
 * Logs out the current user by unsetting and destroying the session.
 */
function logout()
{
    session_unset(); // Remove all session variables.
    session_destroy(); // Destroy the session itself.
}
?>
