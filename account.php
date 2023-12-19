<?php 
// functions.php will contain any functionalities which may be required on more than one page. 
require 'functions.php';
require 'dbfunctions.php';
require_once 'include/header.php';

if(!isset($_SESSION['USER'])) {
    header("Location: index.php");
}

$user = GetUserByID($con, $_SESSION['USER']['ID']);

$incorrectPassword = "";
$passwordUpdated = false;
$tabToShow = "";
if($_SERVER['REQUEST_METHOD'] == "POST") {
    if(isset($_POST["updateDetails"])) {
        $name = htmlspecialchars(addslashes($_POST['firstname']));
        $surname = htmlspecialchars(addslashes($_POST['lastname']));
        $contactNumber = htmlspecialchars(addslashes($_POST['mobilenumber']));
        $user["Name"] = $name;
        $user["Surname"] = $surname;
        $user["ContactNumber"] = $contactNumber;
        $incorrectPassword = "";
        $tabToShow = "accountdetails";
    }
    else if(isset($_POST["updateEmail"])) {
        $email = htmlspecialchars(addslashes($_POST['emailAddress']));
        $user["Email"] = $email;
        $incorrectPassword = "";
        $tabToShow = "accountdetails";
    }
    else if(isset($_POST["updatePassword"])) {
        $password = sha1(htmlspecialchars(addslashes($_POST['currentPassword'])));
        if(strtoupper($password) == strtoupper($user['Password'])) {
            $newPassword = sha1(htmlspecialchars(addslashes($_POST['newPassword'])));
            $confirmPassword = sha1(htmlspecialchars(addslashes($_POST['confirmPassword'])));
            if($newPassword == $confirmPassword) {
                $user['Password'] = $newPassword;
                $incorrectPassword = "";
                $passwordUpdated = true;
            }
            else {
                $incorrectPassword = "Passwords do not match!";
            }
        }
        else {
            $incorrectPassword = "Current password is incorrect";
        }
        if(empty($incorrectPassword)) {
            updateUserObject($con, $user);
        }
        $user = GetUserByID($con, $user["ID"]);
        $tabToShow = "accountdetails";
    }
    else if(isset($_POST["addAddress"])) {
        $address["Name"] = $_POST["firstname"];
        $address["Surname"] = $_POST["lastname"];
        $address["Address"] = $_POST["address-input"];
        $address["City"] = $_POST["city"];
        $address["ZipCode"] = $_POST["zipcode"];
        $address["Region"] = $_POST["region"];
        $address["Default"] = isset($_POST["defaultAddress"]) ? $_POST["defaultAddress"] : 'on';
        if(isset($_POST['addressID']) && !empty($_POST['addressID'])) { 
            $address['ID'] = $_POST['addressID'];
            updateAddress($con, $user["ID"], $address);
        }
        else{
            createAddress($con, $user["ID"], $address);
        }
        
        $tabToShow = "accountaddress";
    }
    else if(isset($_POST["deleteAddressID"])) {
        deleteAddress($con, $_POST["deleteAddressID"]);
        $tabToShow = "accountaddress";
    }
}




$userAddresses = GetAddressesByUser($con, $user['ID']);

?>

<?php 
// Start of Body //
require_once 'include/navbar.php';
?>

<div class="container col-sm-12 col-md-12 col-lg-9 col-xl-9 spacing-my p-1">
    <div class="row">
        <!-- Sidebar -->
        <?php require_once 'account/account-sidebar.php'; // Sidebar for account navigation ?>

        <!-- Main Content -->
        <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 account-sections" id="account-sections">
            <div class="col collapse fade show" data-bs-parent="#account-sections" id="accountoverview">
                <?php require 'account/account-overview.php' // Includes the account overview section ?>
            </div>
            <div class="col collapse fade" data-bs-parent="#account-sections" id="accountdetails">
                <?php require 'account/account-details.php'; // Includes the account details section ?>
            </div>
            <div class="col collapse fade" data-bs-parent="#account-sections" id="accountaddress">
                <?php require 'account/account-addresses.php'; // Includes the addresses management section ?>
            </div>
            <div class="col collapse fade" data-bs-parent="#account-sections" id="accountorders">
                <?php require 'account/account-orders.php'; // Includes the orders history section ?>
            </div>
            <div class="col collapse fade" data-bs-parent="#account-sections" id="accountwishlist">
                <?php require 'account/account-wishlist.php'; // Includes the wishlist section ?>
            </div>
        </div>
    </div>
</div>

<?php  
require_once 'include/footer.php';
if(!empty($tabToShow)) {
    echo '<script type="text/javascript">
            var collapseDetails = new bootstrap.Collapse($("#' . $tabToShow . '")); 
            collapseDetails.show();
            $("#accountoverviewButton").removeClass("active");
            $("#' . $tabToShow .'Button").addClass("active");
        </script>';
}
// End of Body //
?>