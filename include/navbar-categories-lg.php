<?php 
// Retrieve the list of categories from the database using the GetCategories function.
$categories = GetCategories($con);
?>

<div id="navCategories" class=" nav-effect container col-sm-6 col-md-6 col-lg-4 col-xl-4 navbar navbar-light bg-light">
    <!-- Categories Navigation Button -->
    <a href="#"><button class="btn rounded-0 " type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
        aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <!-- Burger menu icon -->
        <span class="navbar-toggler-icon"></span>
        <span class="nav-effect text-muted">Categories</span>
    </button></a>

    <!-- Offcanvas Categories Panel -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header border-bottom border-3 border-danger">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Categories</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <!-- Categories List -->
        <div class="offcanvas-body m-2">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <!-- Loop through each category and create a list item with a link -->
                <?php foreach($categories as $category): ?>
                <li class="nav-item nav-effect">
                    <!-- Link to the shop page filtered by the category ID -->
                    <a class="nav-link p-2" href="shop.php?category=<?php echo $category['ID']; ?>">
                        <?php echo $category["Name"] ?></a>
                </li>
                <?php endforeach ?>
            </ul>
        </div>
    </div>
</div>
