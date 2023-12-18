<?php 
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
      <div class="d-flex flex-nowrap overflow-auto pb-4 brand-img">
        <?php foreach ($brands as $brand): ?>
        <div class="col me-4">
          <a href="#">
            <img class="mx-auto object-fit-scale border-0 rounded-0 text-center"
              src="<?php echo htmlspecialchars($brand['Image']); ?>">
          </a>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>