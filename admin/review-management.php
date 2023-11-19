<?php require '../functions.php'; ?>
<!-- Functions Include: Importing shared functions for the site -->

<?php 
require_once 'include/header.php'; // Header Include: HTML header setup
require_once 'include/navbar.php'; // Navbar Include: Site navigation bar
?>

<div class="container-fluid col-sm-12 col-md-12 col-lg-10 col-xl-10">
    <div class="row justify-content-between">
        <!-- Main Content Area -->
        <?php require_once 'include/sidebar.php'; //Contains the sidebar with navigation links ?>

        <div class="col-sm-12 col-md-12 col-lg-10 col-xl-10 p-4 shadow-sm bg-white">
            <!-- Reviews Management Section -->
            <h2>Reviews Management</h2>
            <!-- PHP To gather the following review details from the database -->
            <table class="table">
                <!-- Reviews Table: Displays review details with action options -->
                <thead class="thead-dark">
                    <!-- Table Head: Column titles -->
                    <tr>
                        <th>ID</th>
                        <th>Content</th>
                        <th>User ID</th>
                        <th>Product ID</th>
                        <th>Rating</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Table Body: Rows with review data and management actions -->
                    <!-- Review -->
                    <tr>
                        <td>1</td>
                        <td>Love this product, would recommend!</td>
                        <td>101</td>
                        <td>501</td>
                        <td>5</td>
                        <td>Awaiting Approval</td>
                        <td>
                            <button class="btn btn-success btn-sm">Approve</button>
                            <button class="btn btn-danger btn-sm">Decline</button>
                        </td>
                    </tr>
                    <!-- Review -->
                    <tr>
                        <td>7</td>
                        <td>Loved it! Exactly what I needed.</td>
                        <td>107</td>
                        <td>507</td>
                        <td>5</td>
                        <td>Approved</td>
                        <td>
                            <!-- Actions can be omitted for approved reviews -->
                        </td>
                    </tr>
                    <!-- Review -->
                    <tr>
                        <td>8</td>
                        <td>The size was not as expected, slightly small.</td>
                        <td>108</td>
                        <td>508</td>
                        <td>3</td>
                        <td>Declined - User Notified</td>
                        <td>
                            <!-- No actions needed for declined reviews if the user has been notified -->
                        </td>
                    </tr>
                    <!-- Review -->
                    <tr>
                        <td>9</td>
                        <td>Great quality, but I expected a faster delivery.</td>
                        <td>109</td>
                        <td>509</td>
                        <td>4</td>
                        <td>Awaiting Approval</td>
                        <td>
                            <button class="btn btn-success btn-sm">Approve</button>
                            <button class="btn btn-danger btn-sm">Decline</button>
                        </td>
                    </tr>
                    <!-- Review -->
                    <tr>
                        <td>13</td>
                        <td>The packaging was damaged upon arrival, but the product was fine.</td>
                        <td>113</td>
                        <td>513</td>
                        <td>3</td>
                        <td>Awaiting Approval</td>
                        <td>
                            <button class="btn btn-success btn-sm">Approve</button>
                            <button class="btn btn-danger btn-sm">Decline</button>
                        </td>
                    </tr>
                    <!-- Review -->
                    <tr>
                        <td>11</td>
                        <td>Completely satisfied, best purchase ever!</td>
                        <td>111</td>
                        <td>511</td>
                        <td>5</td>
                        <td>Awaiting Approval</td>
                        <td>
                            <button class="btn btn-success btn-sm">Approve</button>
                            <button class="btn btn-danger btn-sm">Decline</button>
                        </td>
                    </tr>
                    <!-- Review -->
                    <tr>
                        <td>12</td>
                        <td>The item stopped working after one week.</td>
                        <td>112</td>
                        <td>512</td>
                        <td>1</td>
                        <td>Declined - User Notified</td>
                        <td>
                        </td>
                    </tr>
                    <!-- Reviews end -->
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php require_once 'include/footer.php'; // Contains the footer information ?>