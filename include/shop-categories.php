<?php 
    $categories = GetCategories($con);

?>



 <!-- Shop by Categories -->
 <div class="container spacing-my col-sm-12 col-md-12 col-lg-12 col-xl-8">
     <div class="row">
         <div class="col">
             <h3 class="fs-5">Shop by Categories</h3>
         </div>
         <div class="col-12 categories-btn">
             <div class="d-flex flex-nowrap overflow-auto py-2">
                 <?php foreach($categories as $category):
                        ?>
                 <!-- Table Body: Each row shows user data with options to edit or delete -->
                 <!-- User -->
                        <?php 
                        echo '<div class="col me-2 ">';
                        echo '<a class="btn btn-danger w-100 text-center rounded-0" href="shop.php?category=' . $category["ID"] . '">' . $category["Name"] . '</a>';
                        echo '</div>';?>

                 <?php endforeach ?>
             </div>
         </div>
     </div>
 </div>
