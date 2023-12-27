<?php 
// Retrieve the list of brands from the database using the GetBrands function.
$brands = GetBrands($con);
?>

<!-- Shop by Brands -->
<div class="container col-sm-12 col-md-12 col-lg-12 col-xl-8 spacing-my">
  <div class="row">
    <!-- Section title -->
    <div class="col">
      <h3 class="fs-5">Shop by Brand</h3>
    </div>
    <!-- Brand links -->
    <div class="col">
      <!-- Scrollable Container for Brand Images -->
      <div class="d-flex flex-nowrap overflow-auto pb-4 brand-img">
        <!-- Loop through each brand and display its image -->
        <?php foreach ($brands as $brand): ?>
        <div class="col me-4">
          <!-- Link to the shop page filtered by the brand ID -->
          <a href="shop.php?brand=<?php echo $brand["ID"] ?>">
            <!-- Display brand image -->
            <img class="mx-auto object-fit-scale border-0 rounded-0 text-center" src="<?php echo ($brand['Image']); ?>">
          </a>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>
