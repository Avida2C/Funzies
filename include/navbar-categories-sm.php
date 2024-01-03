<?php 
// Retrieve the list of categories from the database using the GetCategories function.
$categories = GetCategories($con);
$brands = GetBrands($con);
?>

<div id="navCategories-sm" class="container container-sm container-md container-lg container-xl container-xxl navbar navbar-light bg-light">
    <!-- Categories for small screens -->
    <button class="btn rounded-0 py-2 ms-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar2"
        aria-controls="offcanvasNavbar2" aria-label="Toggle navigation">
        <!-- Burger menu icon -->
        <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Offcanvas Navigation Panel -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar2" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header border-bottom border-danger border-3">
            <div class="nav nav-tabs border-0" id="nav-tab" role="tablist">
                <!-- Navigation Tabs -->
                <ul class="nav nav-underline">
                    <li class="nav-item">
                        <button class="nav-link text-muted active btn border-0 rounded-0 text-start" id="nav-menu-tab"
                            data-bs-toggle="tab" data-bs-target="#nav-menu" type="button" role="tab"
                            aria-controls="nav-menu" aria-selected="true">Menu</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link text-muted btn border-0 rounded-0 text-start" id="nav-categories-tab"
                            data-bs-toggle="tab" data-bs-target="#nav-categories" type="button" role="tab"
                            aria-controls="nav-categories" aria-selected="false">Categories</button>
                    </li>
                </ul>
            </div>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>

        <!-- Tab Content -->
        <div class="tab-content container m-2" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-menu" role="tabpanel" aria-labelledby="nav-menu-tab"
                tabindex="0">
                <!-- Menu Items -->
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="shop.php">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact Us</a>
                    </li>
                </ul>
            </div>
            <!-- Categories Tab Pane -->
            <div class="tab-pane fade" id="nav-categories" role="tabpanel" aria-labelledby="nav-categories-tab"
                tabindex="0">
                <div class="navbar-nav pe-3">
                    <!-- Categories List -->
                    <div class="container">
                            <?php
                        // Loop through each category and display it with a link.
                        foreach ($categories as $category) {
                            echo '<li class="border-bottom border-1 align-items-center py-2">';
                            // Link to filter products by this category.
                            echo '<a href="shop.php?category=' . $category["ID"] . '" class="text-decoration-none text-muted">' . $category["Name"] . '</a>';
                            echo '</li>'; 
                        }?>
                            <h3 class="fs-6 mt-2">Brands</h3>
                            <?php
                        // Loop through each brand and display it with a link and product count.
                        foreach ($brands as $brand) {
                            echo '<li class="border-bottom border-1 align-items-center py-2">';
                            // Link to filter products by this brand.
                            echo '<a href="shop.php?brand=' . $brand["ID"] . '" class="text-decoration-none text-muted">' . $brand["Name"] . '</a>';
                        }?>
                        </div>

                    </div>
                    <br>
                </div>
            </div>
        </div>
    </div>