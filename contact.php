<?php 
// functions.php will contain any functionalities which may be required on more than one page. 
require 'functions.php';
require 'dbfunctions.php';
$isValid = true;

// Check if the request method is POST, indicating form submission.
if($_SERVER['REQUEST_METHOD'] == "POST") {
    // Sanitize and validate the name field.
    $name = htmlspecialchars(addslashes($_POST['name']));
    if(preg_match($pattern['name'], $name)!= 1) {
        $isValid = false;
    }
    // Sanitize and validate the email field.
    $email = htmlspecialchars(addslashes($_POST['email'])); 
    if(preg_match($pattern['email'], $email)!= 1) {
        $isValid = false;
    }
    // Sanitize and validate the subject field.
    $subject = htmlspecialchars(addslashes($_POST['subject']));
    if(preg_match($pattern['subject'], $subject)!= 1) {
        $isValid = false;
    }
    // If all fields are valid, proceed to send the message.
    if($isValid) {
        if (isset($_POST["Mailer"])) {
            // Sanitize message fields.
            $name = htmlspecialchars($_POST["name"]);
            $email = htmlspecialchars($_POST["email"]);
            $subject = htmlspecialchars($_POST["subject"]);
            $message= htmlspecialchars($_POST["message"]);
    
            $sent = Mailer($email, $name, $subject, $message);
        }   
    }
}?>


<?php 
// Start of Body //
$pagetitle = 'contact us';
require_once 'include/header.php';
require_once 'include/navbar.php';
?>

<!-- Main Content Container -->
<div class="container py-4 col-sm-12 col-md-12 col-lg-12 col-xl-10">
    <div class="row d-flex justify-content-center">
        <div id="contact" class="p-4 col-sm-12 col-md-12 col-lg-5 col-xl-5">

            <!-- Contact Form Section -->
            <form id="ContactMeform" method="POST">
                <h3>Get in Touch</h3>
                <label for="name">Full Name:</label>
                <input class="w-100 mb-3 p-1" id="contactName" type="text" name="name" onkeyup="validate(this, patterns.name)" required>


                <label for="email">Email:</label>
                <input class="w-100 mb-3 p-1" id="contactEmail" type="email" name="email" required autocomplete="email" onkeyup="validate(this, patterns.email)">

                <label for="subject">Subject:</label>
                <input class="w-100 mb-3 p-1" id="contactSubject" type="text" name="subject" required onkeyup="validate(this, patterns.subject)">

                <label for="message">Message:</label>
                <textarea class="w-100 mb-3 p-2" id="contactMessage" name="message" cols="20" rows="8"
                    required></textarea>

                <!-- Send Message Button -->
                <button class="btn btn-danger rounded-0 w-100" name="Mailer">Send Message</button>
                <!-- Validation and sending status messages -->
                <?php if(!$isValid) {
                    echo '<p style="color:red;" class="pt-3">One or more inputs are incorrect! Please try again. </p>';
                }
                // If message sent, display 'Message Sent!'
                if (isset($sent)) {
                    if($sent) {
                          echo "<p class='pt-3' style='color:green;'> Message Sent! </p>";
                    }
                    // If message not set, display 'Message not sent!'
                    else{
                        echo "<p class='pt-3' style='color:red;'> Message not sent! </p>";
                    }  
                }?>
            </form>
        </div>

        <!-- About Business Section -->
        <div id="aboutFunzies" class="col-sm-12 col-md-12 col-lg-3 col-xl-3 p-4">
            <!-- Business Location, Contact Number, Email Address -->
            <span class="d-flex">
                <ion-icon size="large" name="location"></ion-icon>
                <p class="ms-3">Funzies Collection,<br>1346, Lynn Avenue,<br>Triq Funk,<br>San Pawl il-Baħar, SPB0011
                </p>
            </span>
            <span class="d-flex my-3">
                <ion-icon size="large" name="call"></ion-icon>
                <p class="ms-3">+35612345678</p>
            </span>
            <span class="d-flex my-3">
                <ion-icon size="large" name="mail"></ion-icon>
                <p class="ms-3">example@email.com</p>
            </span>

            <!-- Opening Hours Table -->
            <h3 class="fs-5">Opening Hours</h3>
            <table class="table">
                <tr>
                    <td>
                        Monday
                    </td>
                    <td>
                        9:00 - 19:00
                    </td>
                </tr>
                <tr>
                    <td>
                        Tuesday
                    </td>
                    <td>
                        9:00 - 19:00
                    </td>
                </tr>
                <tr>
                    <td>
                        Wednesday
                    </td>
                    <td>
                        9:00 - 19:00
                    </td>
                </tr>
                <tr>
                    <td>
                        Thursday
                    </td>
                    <td>
                        9:00 - 19:00
                    </td>
                </tr>
                <tr>
                    <td>
                        Friday
                    </td>
                    <td>
                        9:00 - 19:00
                    </td>
                </tr>
                <tr>
                    <td>
                        Saturday
                    </td>
                    <td>
                        9:00 - 12:30
                    </td>
                </tr>
                <tr>
                    <td>
                        Sunday
                    </td>
                    <td>
                        9:00 - 12:30
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>

<?php  
require_once 'include/footer.php';
// End of Body //
?>
