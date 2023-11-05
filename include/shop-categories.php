<!-- Shop by Categories -->
<div class="container spacing-my col-sm-12 col-md-12 col-lg-12 col-xl-8">
    <div class="row">
        <div class="col">
        <h3 class="fs-5">Shop by Categories</h3>
        </div>
        <div class="col-12 categories-btn">
            <div class="d-flex flex-nowrap overflow-auto py-2">
                <?php
                    $categories = ['Board Games', 'Collectibles', 'Figurines', 'Models', 'Puzzles', 'Plushies', 'Posters', 'Gifts'];
                    foreach ($categories as $category) {
                        echo '<div class="col me-2">';
                        echo '<a class="btn btn-danger text-center rounded-0" href="#">' . htmlspecialchars($category) . '</a>';
                        echo '</div>';
                    }
                    ?>
            </div>
        </div>
    </div>
</div>
