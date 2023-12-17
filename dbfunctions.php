<?php
/* Users Management */
function GetUsers($con)
{
    $sql = "SELECT u.*, r.Name as 'roleName' FROM user u JOIN role r on u.Role = r.ID WHERE u.Deleted = '0';";

    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        echo "Could not load Users";
        exit();
    }

    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);

    mysqli_stmt_close($stmt);

    return $result;
}

function updateUser($con, $id, $name, $email, $surname, $number, $role)
{
    $sql = "UPDATE user SET Name = '$name', Email = '$email', Surname = '$surname', ContactNumber = '$number', Role = '$role' WHERE ID = $id;";
    
    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        echo "Could not update Category";
        exit();
    }

    $result = mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);

    return $result;
}

function deleteUser($con, $id)
{
    $sql = "UPDATE user SET Deleted = '1' WHERE ID = '$id'";
    
    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        echo "Could not delete Category";
        exit();
    }

    $result = mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);

    return $result;
}

/* Roles Management */
function GetRoles($con)
{
    $sql = "SELECT * FROM role WHERE Deleted = '0'";

    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        echo "Could not load Roles";
        exit();
    }

    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);

    mysqli_stmt_close($stmt);

    return $result;
}

function createRole($con,$name, $details)
{
    $sql = "INSERT INTO role (Name, Details) VALUES ('$name', '$details')";
    
    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        echo "Could not create Role";
        exit();
    }

    $result = $result = mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);

    return $result;
}

function updateRole($con, $id, $name, $details)
{
    $sql = "UPDATE role SET Name = '$name', Details = '$details' WHERE ID = $id;";
    
    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        echo "Could not update Role";
        exit();
    }

    $result = $result = mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);

    return $result;
}

function deleteRole($con, $id)
{
    $sql = "UPDATE role SET Deleted = '1' WHERE ID = '$id'";
    
    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        echo "Could not delete Roles";
        exit();
    }

    $result = mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);

    return $result;
}

/* Brands Management */
function GetBrands($con)
{
    $sql = "SELECT * FROM brand WHERE Deleted = '0'";

    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        echo "Could not load Brands";
        exit();
    }

    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);

    mysqli_stmt_close($stmt);

    return $result;
}

function createBrand($con, $name, $details, $image)
{
    $path = "img/brands/";
    $target_file = $path . basename($image["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $check = getimagesize($image["tmp_name"]);
    if($check == false) {
        return false;
    }

    $guid = getGUID();
    $imagePath = '../' . $path . $guid . '.' . $imageFileType;
    if(!move_uploaded_file($image["tmp_name"], $imagePath)) {
        return false;
    }

    $imagePath = $path . $guid . '.' . $imageFileType;

    $sql = "INSERT INTO brand (Name, Details, Image) VALUES ('$name', '$details', '$imagePath')";
    
    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        echo "Could not create Brand";
        exit();
    }

    $result = mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);

    return $result;
}

function updateBrand($con, $id, $name, $details, $image)
{
    $imagePath = '';
    if(!empty($image["name"])) {
        $path = "img/brands/";
        $target_file = $path . basename($image["name"]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $check = getimagesize($image["tmp_name"]);
        if($check == false) {
            return false;
        }

        $guid = getGUID();
        $imagePath = '../' . $path . $guid . '.' . $imageFileType;
        if(!move_uploaded_file($image["tmp_name"], $imagePath)) {
            return false;
        }
        $imagePath = $path . $guid . '.' . $imageFileType;
    }

    $sql = "UPDATE brand SET Name = '$name', Details = '$details', Image = '$imagePath' WHERE ID = $id;";
    
    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        echo "Could not update Role";
        exit();
    }

    mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);

    return $result;
}

function deleteBrand($con, $id)
{
    $sql = "UPDATE brand SET Deleted = '1' WHERE ID = '$id'";
    
    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        echo "Could not delete Brand";
        exit();
    }

    $result = mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);

    return $result;
}

/* Categories Management */
function GetCategories($con)
{
    $sql = "SELECT * FROM category WHERE Deleted = '0'";

    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        echo "Could not load Categories";
        exit();
    }

    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);

    mysqli_stmt_close($stmt);

    return $result;
}

function createCategory($con,$name, $details)
{
    $sql = "INSERT INTO category (Name, Details) VALUES ('$name', '$details')";
    
    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        echo "Could not create Category";
        exit();
    }

    $result = mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);

    return $result;
}

function updateCategory($con, $id, $name, $details)
{
    $sql = "UPDATE category SET Name = '$name', Details = '$details' WHERE ID = $id;";
    
    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        echo "Could not update Category";
        exit();
    }

    $result = mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);

    return $result;
}

function deleteCategory($con, $id)
{
    $sql = "UPDATE category SET Deleted = '1' WHERE ID = '$id'";
    
    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        echo "Could not delete Category";
        exit();
    }

    $result = mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);

    return $result;
}

/* Products Management */
function GetProducts($con)
{
    $sql = "SELECT p.*, b.Name as 'brandName', c.Name as 'categoryName' FROM product p JOIN brand b on p.Brand = b.ID JOIN category c ON p.Category = c.ID WHERE p.Deleted = '0'";

    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        echo "Could not load Products";
        exit();
    }

    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);

    mysqli_stmt_close($stmt);

    return $result;
}

function createProduct($con, $name, $description, $shortDescription, $category, $price, $stock, $brand, $image)
{
    $imagePath = '';
    if(!empty($image["name"])) {
        $path = "img/products/";
        $target_file = $path . basename($image["name"]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $check = getimagesize($image["tmp_name"]);
        if($check == false) {
            return false;
        }

        $guid = getGUID();
        $imagePath = '../' . $path . $guid . '.' . $imageFileType;
        if(!move_uploaded_file($image["tmp_name"], $imagePath)) {
            return false;
        }
        $imagePath = $path . $guid . '.' . $imageFileType;
    }

    $sql = "INSERT INTO product (Name, Description, ShortDescription, Category, Price, Stock, Brand, Image, Deleted) 
            VALUES ('$name', '$description', '$shortDescription', '$category', '$price', '$stock', '$brand', '$imagePath', '0')";
    
    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        echo "Could not create Product";
        exit();
    }

    $result = mysqli_stmt_execute($stmt);


    mysqli_stmt_close($stmt);

    return $result;
}

function updateProduct($con, $id, $name, $description, $shortDescription, $category, $price, $stock, $brand, $image)
{
    $imagePath = '';
    if(!empty($image["name"])) {
        $path = "img/brands/";
        $target_file = $path . basename($image["name"]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $check = getimagesize($image["tmp_name"]);
        if($check == false) {
            return false;
        }

        $guid = getGUID();
        $imagePath = '../' . $path . $guid . '.' . $imageFileType;
        if(!move_uploaded_file($image["tmp_name"], $imagePath)) {
            return false;
        }
        $imagePath = $path . $guid . '.' . $imageFileType;
    }

    $sql = "UPDATE product SET Name = '$name', Description = '$description', ShortDescription = '$shortDescription', Category = '$category', Price = '$price', Stock = '$stock',
            Brand = '$brand', Image = '$imagePath'
            WHERE ID = $id;";
    
    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        echo "Could not update Product";
        exit();
    }

    $result = mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);

    return $result;
}

function deleteProduct($con, $id)
{
    $sql = "UPDATE product SET Deleted = '1' WHERE ID = '$id'";
    
    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        echo "Could not delete Product";
        exit();
    }

    $result = mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);

    return $result;
}

/* Order and Order Status Management */
function GetOrderStatus($con)
{
    $sql = "SELECT * FROM orderstatus WHERE Deleted = '0'";

    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        echo "Could not load Order Status";
        exit();
    }

    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);

    mysqli_stmt_close($stmt);

    return $result;
}

function GetOrders($con)
{
    
    $sql = "SELECT o.*, s.Status as 'statusOrder' FROM orders o JOIN orderstatus s on o.status = s.ID ";

    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        echo "Could not load Orders";
        exit();
    }

    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);

    mysqli_stmt_close($stmt);

    return $result;
}

function createOrderStatus($con,$name)
{
    $sql = "INSERT INTO orderstatus (Status) VALUES ('$name')";
    
    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        echo "Could not create Order Status";
        exit();
    }

    $result = mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);

    return $result;
}

function updateOrderStatus($con, $id, $name)
{
    $sql = "UPDATE orderstatus SET Status = '$name' WHERE ID = $id;";
    
    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        echo "Could not update Order Status";
        exit();
    }

    $result = mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);

    return $result;
}

function deleteOrderStatus($con, $id)
{
    $sql = "UPDATE orderstatus SET Deleted = '1' WHERE ID = '$id'";
    
    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        echo "Could not delete Order Status";
        exit();
    }

    $result = mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);

    return $result;
}

/* Review and Review Status Management */
function GetReviewStatus($con)
{
    $sql = "SELECT * FROM reviewstatus WHERE Deleted = '0'";

    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        echo "Could not load Review Status";
        exit();
    }

    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);

    mysqli_stmt_close($stmt);

    return $result;
}

function GetReviews($con)
{
    
    $sql = "SELECT r.*, s.Status as 'statusReview' FROM review r JOIN reviewstatus s on r.Status = s.ID";

    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        echo "Could not load Reviews";
        exit();
    }

    $result = mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);
    return $result;
}

function createReviewStatus($con,$name)
{
    $sql = "INSERT INTO reviewstatus (Status) VALUES ('$name')";
    
    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        echo "Could not create Order Status";
        exit();
    }

    $result = mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);

    return $result;
}

function updateReviewStatus($con, $id, $name)
{
    $sql = "UPDATE reviewstatus SET Status = '$name' WHERE ID = $id;";
    
    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        echo "Could not update Review Status";
        exit();
    }

    $result = mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);

    return $result;
}

function deleteReviewStatus($con, $id)
{
    $sql = "UPDATE reviewstatus SET Deleted = '1' WHERE ID = '$id'";
    
    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        echo "Could not delete Review Status";
        exit();
    }

    $result = mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);

    return $result;
}

function getGUID()
{
    return sprintf('%04X%04X-%04X-%04X-%04X-%04X%04X%04X', mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(16384, 20479), mt_rand(32768, 49151), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535));
}

function adminLogin($con, $email, $password)
{
    $password = sha1($password);
    $sql = "SELECT * FROM user WHERE email = '$email' && password = '$password' && role = '1' && Deleted = '0' LIMIT 1";
    
    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        echo "Could not load Users";
        exit();
    }

    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);

    mysqli_stmt_close($stmt);

    if(mysqli_num_rows($result) > 0) {

        $_SESSION['USER'] = $result->fetch_assoc(); //Memory location, this saves session's data 
        return true;
    }

    return false;
}


?>

