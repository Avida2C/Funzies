<?php 
// functions.php will contain any functionalities which may be required on more than one page. 
require 'functions.php';
require_once 'include/header.php';
?>

<?php 
// Start of Body //
require_once 'include/navbar.php';
?>

<div class="container py-4 col-sm-12 col-md-12 col-lg-12 col-xl-10">
    <div class="row d-flex justify-content-center">
        <div id="contactFunzies" class="p-4 col-sm-12 col-md-12 col-lg-5 col-xl-5">
            <form method="POST">
                <h3>Get in Touch</h3>
                <div class="row">
                    <div class="col">
                        <label for="firstname">First Name:</label><br>
                        <input class="w-100 mb-3 p-1" type="text" name="firstname" required></br>
                    </div>
                    <div class="col">
                        <label for="lastname">Last Name:</label><br>
                        <input class="w-100 mb-3 p-1" type="text" name="lastname" required></br>
                    </div>
                </div>
                <label for="email">Email:</label><br>
                <input class="w-100 mb-3 p-1" type="email" name="email" required><br>
                <label for="subject">Subject:</label><br>
                <input class="w-100 mb-3 p-1" type="text" name="subject" required><br>
                <label for="message">Message:</label><br>
                <textarea class="w-100 mb-1 p-2" name="message" cols="20" rows="8" required></textarea><br>
                <button class="btn btn-danger rounded-0 w-100" name="Mailer">Send Message</button>
            </form>
        </div>
        <div id="aboutFunzies" class="col-sm-12 col-md-12 col-lg-3 col-xl-3 p-4">
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