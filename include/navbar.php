<nav class="bg-light py-2 shadow-sm border-bottom border-5 border-danger">
    <div class="container col-sm-12 col-md-12 col-lg-12 col-xl-10">
        <div class="row text-muted">
            <!-- Navbar Logo, Searchbar and Account options -->
            <!-- Website Logo -->
            <div id="navLogo" class="col-sm-1 col-md-12 col-lg-2 col-xl-2 text-start py-1">
                <a href="index.php"><img class="navLogo" src="img/logo.png" alt="Logo"></a>
            </div>
            <!-- Searchbar -->
            <div id="navSearchbar" class="col-sm-12 col-md-12 col-lg-8 col-xl-8 py-2 align-items-center">
                <form method="get" class="d-flex">
                    <input class="border border-1 border-muted w-100 px-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-danger rounded-0" type="submit">
                        <!-- Search Icon -->
                        <ion-icon name="search-outline"></ion-icon>
                    </button>
                </form>
            </div>
            <!-- Account Options -->
            <div id="navAccount" class="col-sm-6 col-md-12 col-lg-2 col-xl-2 text-end align-self-center">
            <button class="btn text-muted" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">

                    <!-- User Icon (Account)-->
                    <ion-icon size="large" name="person-circle-outline"></ion-icon>
                </button>

                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight"
                    aria-labelledby="offcanvasRightLabel">
                    <div class="offcanvas-header border-bottom border-3 border-danger">
                        <h5 class="offcanvas-title" id="offcanvasRightLabel">Log in</h5>
                        <button class="btn btn-close" data-bs-dismiss="offcanvas">
                    </div>
                    <div class="offcanvas-body">
                        <div class="container col-12">
                            <div class="row">
                                <div class="col-12">
                                    <form class="border-bottom text-start" method="post">
                                        <label for="email">Email address: <span class="text-danger">*</span></label>
                                        <input class="w-100 rounded-0 border-1 p-1" type="email" name="email" required>
                                        <label class="mt-2" for="password">Password: <span
                                                class="text-danger">*</span></label>
                                        <input class="w-100 p-1 rounded-0 border-1" type="password" name="password"
                                            required>
                                        <button class="w-100 my-3 btn btn-danger rounded-0">Log In</button>
                                        <div class="row">
                                            <div class="col-6">
                                                <input type="checkbox" name="rememberme"> <label
                                                    for="rememberme">Remember
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
                                <div class="col text-center my-3 border-bottom">
                                    <ion-icon class="text-black-50" style="font-size: 64px;" name="person-circle">
                                    </ion-icon>
                                    <h3 class="fs-6">No Account yet?</h3>
                                    <a class="text-decoration-none text-danger text-underscrol" href="createAccount.php">
                                        <p>Create Account</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Wishlist -->

                <button class="btn text-muted">
                    <!-- Gift Icon (Wishlist)-->
                    <ion-icon style="font-size: 30px;" name="gift-outline"></ion-icon>
                </button>
                <button class="btn text-muted">
                    <!-- Cart Icon (Shopping List)-->
                    <ion-icon style="font-size: 30px;" name="cart-outline"></ion-icon>
                    </ion-icon>
                </a>
            </div>
            <!-- Navbar Categories section includes: Slider -->
            <!-- Normal Size Screen -->
            <div id="navCategories" class="container col-sm-6 col-md-6 col-lg-4 col-xl-4 navbar navbar-light bg-light">
                <button class="btn btn-danger py-2 ms-2 rounded-0" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <!-- Burger menu icon -->
                    <span class="navbar-toggler-icon"></span>
                    <span>Categories</span>
                </button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
                    aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header border-bottom border-3 border-danger">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Categories</h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>

                    <!-- Slider Content -->
                    <div class="offcanvas-body m-2">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">

                            <li class="nav-item">
                                <a class="nav-link" href="#">Features</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Pricing</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Dropdown link
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Pricing</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Small Size Screen -->
            <div id="navCategories-sm" class="container col-sm-4 col-md-6 col-lg-4 col-xl-4 navbar navbar-light bg-light">
                <button class="btn btn-danger rounded-0 py-2 ms-2" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar2" aria-controls="offcanvasNavbar2" aria-label="Toggle navigation">
                    <!-- Burger menu icon -->
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar2"
                    aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header border-bottom border-danger border-3">

                        <!-- Nav Tabs -->
                        <div class="nav nav-tabs border-0" id="nav-tab" role="tablist">
                            <button style="width:165px;" class="btn btn-danger border-0 rounded-0 active" id="nav-menu-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-menu" type="button" role="tab" aria-controls="nav-menu"
                                aria-selected="true">Menu</button>
                            <button style="width:165px;" class="btn btn-danger border-0 rounded-0" id="nav-categories-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-categories" type="button" role="tab" aria-controls="nav-categories"
                                aria-selected="false">Categories</button>
                        </div>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>

                    <!-- Slider Content: Menu -->
                    <div class="tab-content container m-2" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-menu" role="tabpanel"
                            aria-labelledby="nav-menu-tab" tabindex="0">
                            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Shop</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.php">Contact Us</a>
                                </li>
                            </ul>

                        </div>
                        <!-- Slider Content: Categories-->
                        <div class="tab-pane fade" id="nav-categories" role="tabpanel"
                            aria-labelledby="nav-categories-tab" tabindex="0">
                            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Features</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Pricing</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown"
                                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Dropdown link
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- End Categories - Start of Navigation Section -->
            <div id="navNavigation" class="col-lg-8 col-xl-8 navbar-expand">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active p-3" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link p-3" href="#">Shop</a>
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