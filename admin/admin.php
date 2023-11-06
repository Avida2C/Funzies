<?php require '../functions.php'; ?>

<?php require_once 'include/header.php'; 
require_once 'include/navbar.php';?>

<div class="container-fluid col-10">
    <div class="row justify-content-center shadow-sm bg-white">
        <div class="col-6" style="height:85vh;">
            <center><img class="my-4 w-100" src="../img/you-shall-not-pass.gif" alt="">
            </center>
            <form class="form" method="post">
                <h1>Log In</h1>

                <label for="email-input">Email address: <span class="text-danger">*</span></label>
                <input class="w-100 p-1" type="email" name="email" id="email-input" required autocomplete="email">

                <label class="mt-2" for="password-input">Password: <span class="text-danger">*</span></label>
                <input class="w-100 p-1" type="password" name="password" id="password-input" required
                    autocomplete="current-password">

                <a href="admin-logged-in.php" class="w-100 my-3 btn btn-primary">Log In</a>

        </div>
        </form>

    </div>
</div>
</div>

<?php require_once 'include/footer.php'; ?>
