<?php 
// Retrieve the list of categories from the database using the GetCategories function.
$categories = GetCategories($con);
?>

<div id="navCategories-sm" class="container col-sm-4 col-md-6 col-lg-4 col-xl-4 navbar navbar-light bg-light">
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
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <!-- Categories List -->
                    <?php foreach($categories as $category): ?>
                    <li class="nav-item">
                        <!-- Link to the shop page filtered by the category ID -->
                        <a class="nav-link" href="shop.php?category=<?php echo $category['ID']; ?>">
                            <?php echo $category["Name"] ?></a>
                    </li>
                    <?php endforeach ?>
                </ul>
            </div>
        </div>
    </div>
</div>
