<?php 
// functions.php will contain any functionalities which may be required on more than one page. 
require 'functions.php';
require 'dbfunctions.php';
require_once 'include/header.php';

$userCreated = false;
if($_SERVER['REQUEST_METHOD'] == "POST") {
    if(isset($_POST["email"])) {
        $email = htmlspecialchars(addslashes($_POST['email'])); // 'addslashes' allows the user to use brackets
        $password = htmlspecialchars(addslashes($_POST['password']));

        // print_r(mysqli_num_rows($result)); this will display the result which includes the results found in the db under num_rows
        if(userLogin($con, $email, $password)) {
            header("Location: account.php"); //this will direct the user to a different page
        }
        else
        {
            $error = "Incorrect email or password, try again!";
        }
    } else if (isset($_POST["createemail"])) {
        $user = [];
        $user['Name'] = $_POST['name'];
        $user['Surname'] = $_POST['surname'];
        $user['Email'] = $_POST['createemail'];
        $user['Password'] = sha1($_POST['createpassword']);
        $user['ContactNumber'] = $_POST['contactnumber'];
        $user['ID'] = createUser($con, $user);
        if($user['ID'] > 0) {
            $userCreated = true;
        }
    }
}

require_once 'include/navbar.php';
?>

<div class="container py-4 col-sm-12 col-md-12 col-lg-8 col-xl-8">
    <div class="row d-flex justify-content-center">
        <!-- Account Creation and Login Section -->
        <div id="createAccLeft" class="col-sm-12 col-md-12 col-lg-5 col-xl-5">
            <!-- Sign Up Tab -->
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-signup" role="tabpanel"
                    aria-labelledby="pills-signup-tab" tabindex="0">

                    <!-- Sign Up Form -->
                    <form class="p-4" method="post">
                        <h1>Sign Up</h1>
                        <?php if(!$userCreated) : ?>
                        <div class="row">
                            <div class="col">
                                <label for="name-input">Name<span class="text-danger">*</span></label>
                                <input class="w-100 p-1 mb-2" type="text" id="name-input" name="name" placeholder="Name"
                                    required autocomplete="name">
                            </div>
                            <div class="col">
                                <label for="surname-input">Surname<span class="text-danger">*</span></label>
                                <input class="w-100 p-1 mb-2" type="text" id="surname-input" name="surname"
                                    placeholder="Surname" required autocomplete="surname">
                            </div>
                        </div>

                        <label for="contactnumber">Contact Number<span class="text-danger">*</span></label>
                        <input class="w-100 p-1 mb-2" type="contactnumber" id="contactnumber-input" name="contactnumber"
                            placeholder="Contact Number" required autocomplete="contactnumber">

                        <label for="email-input">Email<span class="text-danger">*</span></label>
                        <input class="w-100 p-1 mb-2" type="email" id="email-input" name="createemail" placeholder="Email"
                            required autocomplete="email">

                        <label for="password-input">Password<span class="text-danger">*</span></label>
                        <input class="w-100 p-1 mb-2" type="password" id="password-input" name="createpassword"
                            placeholder="Password" required autocomplete="new-password">

                        <p>By clicking Sign Up, you are agreeing to our <a class="text-decoration-none"
                                href="terms.php">Terms and Conditions</a>.</p>
                        <!-- Signup submit button -->
                        <button class="w-100 btn btn-danger rounded-0">Sign Up</button>
                        <?php else : ?>
                            <h2>User has been created, you can now login!</h2>
                        <?php endif; ?>
                    </form>
                </div>

                <!-- Log In Tab -->
                <div class="tab-pane fade" id="pills-login" role="tabpanel" aria-labelledby="pills-login-tab"
                    tabindex="0">
                    <!-- Log In Form -->
                    <form class="p-4" method="post">
                        <h1>Log In</h1>

                        <label for="email-input">Email address: <span class="text-danger">*</span></label>
                        <input class="w-100 rounded-0 border-1 p-1" type="email" name="email" id="email-input" required
                            autocomplete="email">

                        <label class="mt-2" for="password-input">Password: <span class="text-danger">*</span></label>
                        <input class="w-100 p-1 rounded-0 border-1" type="password" name="password" id="password-input"
                            required autocomplete="current-password">
                        <!-- Login submit button -->
                        <button class="w-100 my-3 btn btn-danger rounded-0">Log In</button>

                        <?php
                        if(!empty($error)) {

                            echo '<div class="container" style="margin-left: auto; margin-right: auto;">
                            <p style="text-align:center;color:red;">' 
                            . $error . 
                            '</p></div>';
                        }
                        ?>

                        <div class="row">
                            <div class="col-6">
                                <a class="text-danger text-decoration-none" href="forgotPassword.php">Forgot
                                    password?</a>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>

        <!-- Right Section with Information and Toggle Buttons -->
        <div id="createAccRight" class="col-sm-12 col-md-12 col-lg-4 col-xl-4 p-4 align-self-center"
            style="height: 400px;">
            <!-- Additional Information and Toggle Buttons for Sign Up and Log In -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 py-2">
                        <p>Ready to dive into the treasure trove? Unearth the world of collectibles! Whether you're
                            itching to discover hidden gems or expand your cherished collection, just spill the beans,
                            and we'll whisk you away on this electrifying journey. Fret not, we'll only ask
                            for the must-haves to make your collectibles escapade sizzle!</p>
                        <hr>
                    </div>
                    <div class="col-12 d-flex justify-content-center">
                        <ul class="nav nav-pills" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <!-- Sign Up Toggle Button -->
                                <button class="btnRegister btn btn-danger rounded-0 active"
                                    style="display:none; width:120px;" id="pills-signup-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-signup" type="button" role="tab" aria-controls="pills-signup"
                                    aria-selected="true" onclick="buttonSwitch('signup')">Sign Up</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <!-- Log In Toggle Button -->
                                <button class="btnLogin btn btn-danger rounded-0" style="width:120px;"
                                    id="pills-login-tab" data-bs-toggle="pill" data-bs-target="#pills-login"
                                    type="button" role="tab" aria-controls="pills-login" aria-selected="false"
                                    onclick="buttonSwitch('login')">Log In</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php  
    require_once 'include/footer.php';
    // End of Body //
?>