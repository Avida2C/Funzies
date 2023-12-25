<?php
$defAddress = null;
foreach($userAddresses as $address) {
    if($address["Def"]) {
        $defAddress = $address;
    }
}
?>

<h3 class="border-bottom border-2 border-danger pb-2">Profile Overview</h3>
<div class="card-body">
    <!-- Profile Image and User Details -->
    <div class="row align-items-center">
        <div class="col-sm-7 col-md-8 col-lg-9">

            <!-- Adjusted the column size -->
            <h4><?php echo $user["Name"] . " " . $user["Surname"]?></h4>
            <p><strong>Joined:</strong> <?php echo $user["Joined"]?></p>
        </div>
    </div>

    <!-- Shipping Address -->
    <div class="mt-4">
        <h5>Default Shipping Address</h5>
        <?php if($defAddress != null) : ?>
        <address>
            <?php echo $defAddress["Name"] . " " . $defAddress["Surname"] ?>
            <br><?php echo $defAddress["Street"] ?>
            <br><?php echo $defAddress["City"] ?>
            <br><?php echo $defAddress["ZipCode"] ?>
            <br><?php echo $defAddress["Region"] ?>
        </address>
        <?php else : ?>
            You have no addresses!
        <?php endif; ?>
    </div>
</div>
