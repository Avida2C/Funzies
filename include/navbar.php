<nav class="text-center text-lg-start bg-light">
    <div class="container col-sm-12 col-md-12 col-lg-12 col-xl-10 align-items-center py-2">
        <div class="row text-muted">
            <!-- Navbar Logo, Searchbar and Account options -->
            <div id="navLogo" class="col-sm-4 col-md-12 col-lg-2 col-xl-2 text-start py-1">
                <img class="navLogo" src="img/logo.png" alt="Logo">
            </div>
            <div id="navSearchbar" class="col-sm-12 col-md-12 col-lg-8 col-xl-8 py-2">
                <form method="get" class="d-flex">
                    <input class="rounded border w-100 p-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="rounded ms-1 border bg-light" type="submit">
                        <ion-icon size="large" name="search-outline"></ion-icon>
                    </button>
                </form>
            </div>
            <div id="navAccount" class="col-sm-4 col-md-12 col-lg-2 col-xl-2 text-end py-3">
                <a href="#" class="text-decoration-none text-muted px-1">
                    <ion-icon size="large" name="person-circle-outline"></ion-icon>
                </a>
                <a href="#" class="text-decoration-none text-muted px-1">
                    <ion-icon size="large" name="gift-outline"></ion-icon>
                </a>
                <a href="#" class="text-decoration-none text-muted px-1">
                    <ion-icon size="large" name="cart-outline"></ion-icon>
                    </ion-icon>
                </a>
            </div>

            <!-- Navbar Categories section -->
            <div id="navCatergories"
                class="navbar navbar-expand-lg navbar-light bg-light col-sm-4 col-md-12 col-lg-2 col-xl-2">
                <div class="container-fluid">
                    <button class="navbar-toggler py-2" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
                        aria-labelledby="offcanvasNavbarLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                                </li>
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
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Pricing</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</nav>