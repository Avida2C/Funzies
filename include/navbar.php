<nav class="bg-light py-2 shadow-sm border-bottom border-5 border-danger">
    <!-- Main Navigation Bar -->
    <div class="container col-sm-12 col-md-12 col-lg-10 col-xl-10">
        <div class="row text-muted align-items-center">
            <!-- Navbar Logo -->
            <div id="navLogo" class="col-sm-1 col-md-12 col-lg-2 col-xl-2 text-start py-1">
                <a href="index.php"><img class="navLogo" src="img/logo.png" alt="Website Logo"></a>
            </div>

            <!-- Account, Wishlist, and Shopping Cart Icons -->
            <div id="navSearchbar" class="col-sm-12 col-md-12 col-lg-7 col-xl-7 py-2 align-items-center">
                <form method="get" class="d-flex">
                    <label for="searchInput" class="visually-hidden">Search</label>
                    <input id="searchInput" class="border border-1 border-muted w-100 px-2" type="search"
                        placeholder="Search" aria-label="Search">
                    <button class="btn btn-danger rounded-0" type="submit">
                        <ion-icon name="search-outline"></ion-icon>
                    </button>
                </form>
            </div>

            <div id="navAccount" class="col-sm-6 col-md-12 col-lg-3 col-xl-3 text-end align-self-center">
                <!-- Account Login Button and Sidebar -->
                <button class="btn text-muted" type="button" data-bs-toggle="offcanvas" data-bs-target="#AccountLogin"
                    aria-controls="AccountLogin">
                    <ion-icon size="large" name="person-circle-outline"></ion-icon>
                </button>
                <!-- Account Login Sidebar -->
                <?php require_once 'include/navbar-account-sidebar.php'?>

                <!-- Wishlist Button -->
                <button onclick="navigateToWishlist()" class="btn text-muted">
                    <ion-icon style="font-size: 30px;" name="gift-outline"></ion-icon>
                </button>

                <!-- Shopping Cart Button and Sidebar -->
                <button class="btn text-muted" type="button" data-bs-toggle="offcanvas" data-bs-target="#ShoppingCart"
                    aria-controls="ShoppingCart">
                    <ion-icon size="large" name="cart-outline"></ion-icon>
                </button>

                <?php require_once 'include/navbar-cart-sidebar.php' ?>
            </div>

            <!-- Category Navigation for Different Screen Sizes -->
            <?php require_once 'include/navbar-categories-lg.php' // Large Screen ?>
            <?php require_once 'include/navbar-categories-sm.php' // Small Screen ?>

            <!-- Central Navigation Links -->
            <div id="navNavigation" class="col-lg-8 col-xl-8 navbar-expand mx-auto text-center">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active p-3" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link p-3" href="shop.php">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link p-3" href="contact.php">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End of Navbar -->
</nav>