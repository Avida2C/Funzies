<?php require '../functions.php'; 
require '../dbfunctions.php'; 

if($_SERVER['REQUEST_METHOD'] == "POST" && !empty($_POST['isReviewStatus'])) {
    if (!empty($_POST['reviewStatusIDDelete'])) {
        $id = htmlspecialchars(addslashes($_POST['reviewStatusIDDelete']));
        $deletereviewStatus = deleteReviewStatus($con, $id);
    } else if(empty($_POST['reviewStatusID'])) {
        $name = htmlspecialchars(addslashes($_POST['reviewStatusName'])); // 'addslashes' allows the user to use brackets
        $createreviewStatus = createReviewStatus($con, $name);
    } else if(!empty($_POST['reviewStatusID'])) {
        $id = htmlspecialchars(addslashes($_POST['reviewStatusID']));
        $name = htmlspecialchars(addslashes($_POST['reviewStatusName'])); // 'addslashes' allows the user to use brackets
        $updatereviewStatus = updateReviewStatus($con, $id, $name);
    }
} else if($_SERVER['REQUEST_METHOD'] == "POST" && !empty($_POST['isReview'])) {

}

$reviewStatuses = GetReviewStatus($con);
$reviews = GetReviews($con);

?>
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
            <h4>Reviews Status Management</h4>
            <button class="btn btn-success mb-3" type="button" data-bs-toggle="modal"
                data-bs-target="#reviewStatusModal" onclick="clearModalReviewStatusFields();">Add New Review
                Status</button>

            <!-- Modal -->
            <div class="modal fade" id="reviewStatusModal" tabindex="-1" aria-labelledby="reviewStatusModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="reviewStatusModalLabel">Create New Review Status</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form method="post">
                            <div class="modal-body">
                                <input type="hidden" name="reviewStatusID" id="reviewStatusID"></input>
                                <label class="w-100" for="reviewStatusName">Review Status Name<span
                                        class="text-danger">*</span>:</label>
                                <input class="w-100 mt-2 p-2" type="text" id="reviewStatusName" name="reviewStatusName"
                                    required>
                            </div>
                            <div class="modal-footer">
                                <input type="hidden" name="isReviewStatus" id="isReviewStatus" value="true"></input>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="container overflow-auto" style="height:200px;">
            <!-- PHP To gather the following review details from the database -->
            <table class="table">
                <!-- Reviews Table: Displays review details with action options -->
                <thead class="thead-dark">
                    <!-- Table Head: Column titles -->
                    <tr>
                        <th>ID</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($reviewStatuses as $reviewStatus):
                        ?>
                    <!-- Table Body: Each row shows user data with options to edit or delete -->
                    <!-- User -->
                    <tr>
                        <td><?php echo $reviewStatus["ID"]; ?></td>
                        <td><?php echo $reviewStatus["Status"]; ?></td>
                        <td style="width:100px;">
                            <form method="POST">
                                <input type="hidden" name="isReviewStatus" id="isReviewStatus" value="true"></input>
                                <input type="hidden" id="reviewStatusIDDelete" name="reviewStatusIDDelete"
                                    value='<?php echo $reviewStatus["ID"]; ?>'></input>
                                <button type="button" class="btn btn-primary btn-sm w-100" data-bs-toggle="modal"
                                    data-bs-target="#reviewStatusModal"
                                    onclick='setModalReviewStatusFields("<?php echo $reviewStatus["ID"]; ?>", "<?php echo $reviewStatus["Status"]; ?>")'>Edit</button>
                                <button type="submit" class="btn btn-danger btn-sm w-100">Delete</button>
                            </form>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
                    </div>
            <h4>Reviews Management</h4>
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
                    <?php foreach($reviews as $review):
                    ?>
                    <!-- Table Body: Each row shows user data with options to edit or delete -->
                    <!-- User -->
                    <tr>
                        <td><?php echo $review["ID"]; ?></td>
                        <td><?php echo $review["Content"]; ?></td>
                        <td><?php echo $review["Product"]; ?></td>
                        <td><?php echo $review["Rating"]; ?></td>
                        <td><?php echo $review["statusReview"]; ?></td>
                        <td>
                            <button class="btn btn-primary btn-sm w-100">Edit</button>
                            <button class="btn btn-danger btn-sm w-100">Delete</button>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php require_once 'include/footer.php'; // Contains the footer information ?>