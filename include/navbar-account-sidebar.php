<div class="offcanvas offcanvas-end" tabindex="-1" id="AccountLogin" aria-labelledby="AccountLoginLabel">
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

                        <button onclick="window.location.href='account.php'" class="w-100 my-3 btn btn-danger rounded-0">Log In</button>

                        <!-- Remember Me Checkbox and Forgot Password Link -->
                        <div class="row">
                            <div class="col-6">
                                <input type="checkbox" id="rememberme" name="rememberme">
                                <label for="rememberme">Remember me</label>
                            </div>
                            <div class="col-6 text-end">
                                <a class="text-danger text-decoration-none" href="forgotPassword.php">Forgot
                                    password?</a>
                            </div>
                        </div>
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
        </div>
    </div>
</div>