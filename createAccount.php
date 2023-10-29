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
    <div class="row">
        <div id="createAccLeft" class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-signup" role="tabpanel"
                    aria-labelledby="pills-signup-tab" tabindex="0">
                    <form class="p-4" method="post">
                        <h1>Sign Up</h1>
                        <label for="username">Username<span class="text-danger">*</span></label>
                        <input class="w-100 p-1 mb-2" type="text" name="username" placeholder="Username" required>
                        <label for="email">Email<span class="text-danger">*</span></label>
                        <input class="w-100 p-1 mb-2" type="email" name="email" placeholder="Email" required>
                        <label for="password">Password<span class="text-danger">*</span></label>
                        <input class="w-100 p-1 mb-2" type="password" name="password" placeholder="Password" required>
                        <p>By clicking Sign Up, you are agreeing to our <a class="text-decoration-none" href="terms.php">Terms
                                and Conditions</a>.</p>
                        <button class="w-100 btn btn-danger rounded-0">Sign Up</button>
                    </form>
                </div>
                <div class="tab-pane fade" id="pills-login" role="tabpanel" aria-labelledby="pills-login-tab"
                    tabindex="0">
                    <form class="p-4" method="post">
                        <h1>Log In</h1>
                        <label for="email">Email address: <span class="text-danger">*</span></label>
                        <input class="w-100 rounded-0 border-1 p-1" type="email" name="email" required>
                        <label class="mt-2" for="password">Password: <span class="text-danger">*</span></label>
                        <input class="w-100 p-1 rounded-0 border-1" type="password" name="password" required>
                        <button class="w-100 my-3 btn btn-danger rounded-0">Log In</button>
                        <div class="row">
                            <div class="col-6">
                                <input type="checkbox" name="rememberme"> <label for="rememberme">Remember
                                    me</label>
                            </div>
                            <div class="col-6 text-end">
                                <a class="text-danger text-decoration-none float-left" href="forgotPassword.php">
                                    <p>Forgot password?</p>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div id="createAccRight" class="col-sm-12 col-md-12 col-lg-12 col-xl-6 p-4 align-self-center" style="height: 400px;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 py-2">
                        <p>Ready to dive into the treasure trove? Unearth the world of collectibles! Whether you're
                            itching to discover hidden gems or expand your cherished collection, just spill the beans, and we'll whisk you away on this electrifying journey. Fret not, we'll only ask
                            for the must-haves to make your collectibles escapade sizzle!</p>
                        <hr>
                    </div>
                    <div class="col-12 d-flex justify-content-center">
                        <ul class="nav nav-pills" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="btnRegister btn btn-danger rounded-0 active"
                                    style="display:none; width:120px;" id="pills-signup-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-signup" type="button" role="tab"
                                    aria-controls="pills-signup" aria-selected="true"
                                    onclick="buttonSwitch('signup')">Sign Up</button>
                            </li>
                            <li class="nav-item" role="presentation">
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