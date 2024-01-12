<?php

$incorrectLoginSidebar = false;

/**
 * Handles the login functionality for the sidebar form.
 *
 * If the request method is POST and the "sideBarLogin" parameter is set to "true" and not empty,
 * it retrieves the email and password from the POST data and sanitizes them.
 *
 * It then calls the userLogin function with the database connection, email, and password as parameters.
 * If the login is successful, it redirects the user to the account.php page.
 * If the login fails, it sets the $incorrectLoginSidebar variable to true and assigns an error message to $errorSidebar.
 *
 * @param array $con The database connection object.
 * @param string $email The email address entered by the user.
 * @param string $password The
 */
if($_SERVER['REQUEST_METHOD'] == "POST" && !empty($_POST["sideBarLogin"]) && $_POST["sideBarLogin"] == "true") {
    // Sanitize and capture the email and password input from the user.
    $email = htmlspecialchars(addslashes($_POST['email']));
    $password = htmlspecialchars(addslashes($_POST['password']));

    // Attempt to log the user in using the userLogin function.
    if(userLogin($con, $email, $password)) {
        //this will direct the user to the account page
        header("Location: account.php"); 
    }
    else
    {
        // If login fails, set error message.
        $incorrectLoginSidebar = true;
        $errorSidebar = "Incorrect email or password, try again!";
    }
}
?>

<div class="offcanvas offcanvas-end <?php if($incorrectLoginSidebar) { echo 'show'; 
                                    } ?>" tabindex="-1" id="AccountLogin"
    aria-labelledby="AccountLoginLabel">
    <!-- Login Panel -->
    <div class="offcanvas-header border-bottom border-3 border-danger">
        <h5 class="offcanvas-title" id="AccountLoginLabel">Log in</h5>
        <button class="btn btn-close" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body">
        <div class="container col-12">
            <div class="row">
                <div class="col-12">
                    <!-- Login Form -->
                    <form class="border-bottom text-start" method="post">
                        <!-- Email Input -->
                        <label for="email">Email address:<span class="text-danger">*</span></label>
                        <input class="w-100 rounded-0 border-1 p-1" type="email" id="email" name="email" required
                            autocomplete="email">
                        <!-- Password Input -->
                        <label class="mt-2" for="password">Password:<span class="text-danger">*</span></label>
                        <input class="w-100 p-1 rounded-0 border-1" type="password" id="password" name="password"
                            required>

                        <?php
                        if(!empty($errorSidebar)) {
                            // Error message display
                            echo '<div class="container" style="margin-left: auto; margin-right: auto;">
                            <p style="text-align:center;color:red;">' . $errorSidebar . '</p></div>';
                        }?>

                        <button class="w-100 my-3 btn btn-danger rounded-0">Log In</button>

                        <!-- Remember Me Checkbox and Forgot Password Link -->
                        <div class="row">
                            <div class="col-6">
                                <a class="text-danger text-decoration-none" href="forgotPassword.php">Forgot
                                    password?</a>
                            </div>
                        </div>
                        <input type="hidden" id="sideBarLogin" name="sideBarLogin" value="true"></input>
                    </form>
                </div>
                <!-- Sign Up Section -->
                <div class="col text-center my-3 border-bottom">
                    <ion-icon class="text-black-50" style="font-size: 64px;" name="person-circle">
                    </ion-icon>
                    <h3 class="fs-6">No Account yet?</h3>
                    <a class="text-decoration-none text-danger" href="createAccount.php">Create
                        Account</a>
                </div>
            </div>
            <?php $incorrectLoginSidebar = false; ?>
        </div>
    </div>
</div>
