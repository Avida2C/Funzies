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

/* Users Management */
function GetUserByID($con, $id)
{
    $sql = "SELECT * FROM user WHERE ID = '$id'"; 

    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        echo "Could not load Users";
        exit();
    }

    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);

    mysqli_stmt_close($stmt);

    if(mysqli_num_rows($result) > 0) {

        return $result->fetch_assoc(); //Memory location, this saves session's data 
    }

    return false;

}

function updateUser($con, $id, $name, $email, $surname, $number, $role, $password)
{
    $sql = "UPDATE user SET Name = '$name', Email = '$email', Surname = '$surname', ContactNumber = '$number', Role = '$role', Password = '$password' WHERE ID = $id;";
    
    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        echo "Could not update Category";
        exit();
    }

    $result = mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);

    return $result;
}

function updateUserObject($con, $user)
{
    return updateUser($con, $user["ID"], $user["Name"], $user["Email"], $user["Surname"], $user["ContactNumber"], $user["Role"], $user["Password"]);
}

function resetUserPassword($con, $userEmail, $userPassword) {
    $sql = "UPDATE user SET Password = '$userPassword' WHERE Email = '$userEmail';";
    
    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        echo "Could not update user password";
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

function createUser($con, $user) {
    $userName = $user["Name"];
    $userSurname = $user["Surname"];
    $userEmail = $user["Email"];
    $userPassword = $user["Password"];
    $userContactNumber = $user["ContactNumber"];

    $sql = "INSERT INTO user (Email, Name, Surname, Joined, Verified, Password, ContactNumber, Role, Deleted) VALUES ('$userEmail', '$userName', '$userSurname', NOW(), 0, '$userPassword', '$userContactNumber', 2, 0);";
    
    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        echo "Could not create Role";
        exit();
    }

    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_insert_id($stmt);
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

    $result = mysqli_stmt_execute($stmt);

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

function GetProductsPage($con, $sort, $category, $brand, $search)
{
    $sql = "SELECT p.*, b.Name as 'brandName', c.Name as 'categoryName' FROM product p JOIN brand b on p.Brand = b.ID JOIN category c ON p.Category = c.ID WHERE p.Deleted = '0'";

    if(isset($category)) {
        $sql .= " AND c.ID = $category";
    } else if(isset($brand)) {
        $sql .= " AND b.ID = $brand";
    } else if(isset($search)) {
        $sql .= " AND p.Name LIKE '%$search%'";
    }

    switch($sort) {
        case "1": {
            $sql .= " ORDER BY p.DateAdded DESC;";
            break;
        }
        case "2": {
            $sql .= " ORDER BY p.Price ASC;";
            break;
        }
        case "3": {
            $sql .= " ORDER BY p.Price DESC;";
            break;
        }
    }

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

function GetLatestProductsIndex($con)
{
    $sql = "SELECT p.*, b.Name as 'brandName', c.Name as 'categoryName' FROM product p JOIN brand b on p.Brand = b.ID JOIN category c ON p.Category = c.ID WHERE p.Deleted = '0' ORDER BY p.DateAdded DESC LIMIT 4;";

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

function GetBestSellersIndex($con)
{
    $sqlOrders = "SELECT o.product, Count(o.product), SUM(o.quantity) FROM funzies.order_product o GROUP BY o.product;";

    $sql = "SELECT p.*, b.Name as 'brandName', c.Name as 'categoryName' FROM product p JOIN brand b on p.Brand = b.ID JOIN category c ON p.Category = c.ID WHERE p.Deleted = '0' ORDER BY p.DateAdded DESC LIMIT 4;";

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

function GetProductByID($con, $id)
{
    $sql = "SELECT p.*, b.Name as 'brandName', c.Name as 'categoryName', c.ID as 'categoryID' FROM product p JOIN brand b on p.Brand = b.ID JOIN category c ON p.Category = c.ID WHERE p.Deleted = '0' AND p.ID = '$id'";

    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        echo "Could not load Products";
        exit();
    }

    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);

    mysqli_stmt_close($stmt);

    if(mysqli_num_rows($result) > 0) {

        return $result->fetch_assoc(); //Memory location, this saves session's data 
    }

    return false;

}

function GetProductCountForCategory($con, $category)
{
    $sql = "SELECT Count(*) as 'Amount' FROM product WHERE Category = '$category'";

    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        echo "Could not load Products";
        exit();
    }

    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);

    mysqli_stmt_close($stmt);

    if(mysqli_num_rows($result) > 0) {
        return $result->fetch_assoc()["Amount"]; //Memory location, this saves session's data 
    }

    return 0;

}

function GetProductCountForBrand($con, $brand)
{
    $sql = "SELECT Count(*) as 'Amount' FROM product WHERE Brand = '$brand'";

    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        echo "Could not load Products";
        exit();
    }

    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);

    mysqli_stmt_close($stmt);

    if(mysqli_num_rows($result) > 0) {
        return $result->fetch_assoc()["Amount"]; //Memory location, this saves session's data 
    }

    return 0;

}

function createProduct($con, $name, $description, $category, $price, $stock, $brand, $image)
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

    $sql = "INSERT INTO product (Name, Description, Category, Price, Stock, Brand, Image, Deleted) 
            VALUES ('$name', '$description', '$category', '$price', '$stock', '$brand', '$imagePath', '0')";
    
    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        echo "Could not create Product";
        exit();
    }

    $result = mysqli_stmt_execute($stmt);


    mysqli_stmt_close($stmt);

    return $result;
}

function updateProduct($con, $id, $name, $description, $category, $price, $stock, $brand, $image)
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

    $sql = "UPDATE product SET Name = '$name', Description = '$description', Category = '$category', Price = '$price', Stock = '$stock',
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
    
    $sql = "SELECT o.*, s.Status as 'statusOrder' FROM orders o JOIN orderstatus s on o.status = s.ID WHERE o.deleted = 0";

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

function deleteOrder($con, $id) {
    $sql = "UPDATE orders SET deleted = 1 WHERE ID = $id;";
    
    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        echo "Could not update Order Status";
        exit();
    }

    $result = mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);

    return $result;
}

function setOrderStatus($con, $id, $status)
{
    $sql = "UPDATE orders SET status = '$status' WHERE ID = $id;";
    
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

    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);

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

function userLogin($con, $email, $password)
{
    $password = sha1($password);
    $sql = "SELECT * FROM user WHERE email = '$email' && password = '$password' && Deleted = '0' LIMIT 1";
    
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

function GetAddressesByUser($con, $userID)
{
    $sql = "SELECT * FROM address WHERE User = '$userID' AND Deleted = '0';";

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

function GetAddressByID($con, $ID)
{
    $sql = "SELECT * FROM address WHERE ID = '$ID';";

    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        echo "Could not load Roles";
        exit();
    }

    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt)->fetch_assoc();

    mysqli_stmt_close($stmt);

    return $result;
}

function createAddress($con, $userID, $address)
{
    $name = $address["Name"];
    $surname = $address["Surname"];
    $street = $address["Street"];
    $city = $address["City"];
    $zipCode = $address["ZipCode"];
    $region = $address["Region"];
    $default = $address["Default"] == 'true' ? 1 : 0;
    $mobile = $address['Mobile'];

    if($default) {
        $sql = "UPDATE address SET Def = '0' WHERE User = '$userID';";
        $stmt = mysqli_stmt_init($con);
        if(!mysqli_stmt_prepare($stmt, $sql)) {
            echo "Could not create Order Status";
            exit();
        }

        mysqli_stmt_execute($stmt);
        
        mysqli_stmt_close($stmt);
    }

    $sql = "INSERT INTO address (Street, City, ZipCode, Region, User, Def, Deleted, Name, Surname, Mobile) VALUES ('$street', '$city', '$zipCode', '$region', '$userID', '$default', '0', '$name', '$surname', '$mobile');";
    
    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        echo "Could not create Order Status";
        exit();
    }

    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_insert_id($stmt);
    mysqli_stmt_close($stmt);

    return $result;
}

function updateAddress($con, $userID, $address)
{
    $id = $address["ID"];
    $name = $address["Name"];
    $surname = $address["Surname"];
    $street = $address["Address"];
    $city = $address["City"];
    $zipCode = $address["ZipCode"];
    $region = $address["Region"];
    $default = $address["Default"] === 'true';

    if($default) {
        $sql = "UPDATE address SET Def = '0' WHERE User = '$userID';";
        $stmt = mysqli_stmt_init($con);
        if(!mysqli_stmt_prepare($stmt, $sql)) {
            echo "Could not create Order Status";
            exit();
        }

        $result = mysqli_stmt_execute($stmt);

        mysqli_stmt_close($stmt);
    }

    $sql = "UPDATE address SET Street = '$street', City = '$city', ZipCode = '$zipCode', Region = '$region', Def = '$default', Name = '$name', Surname = '$surname' WHERE ID = '$id';";
    
    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        echo "Could not create Order Status";
        exit();
    }

    $result = mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);

    return $result;
}

function deleteAddress($con, $id)
{
    $sql = "UPDATE address SET Deleted = '1' WHERE ID = '$id'";
    
    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        echo "Could not delete Review Status";
        exit();
    }

    $result = mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);

    return $result;
}

function createWishlistItem($con, $productID, $userID) {
    $sql = "INSERT INTO wishlist (user, product) VALUES('$userID', '$productID');";
    
    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        echo "Could not delete Review Status";
        exit();
    }

    $result = mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);

    return $result;
}

function deleteWishlistItem($con, $productID, $userID) {
    $sql = "DELETE FROM wishlist WHERE user = '$userID' AND product = '$productID';";
    
    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        echo "Could not delete Review Status";
        exit();
    }

    $result = mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);

    return $result;
}

function GetWishlistItem($con, $userID, $productID) {
    $sql = "SELECT * FROM wishlist WHERE user = '$userID' AND product = '$productID';";

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

function GetWishlistByUser($con, $userID) {
    $sql = "SELECT * FROM wishlist WHERE user = '$userID';";

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

function createOrder($con, $user, $selectedAddress, $cartItems) {
    
    $sql = "INSERT INTO orders (created, updated, status, user, address) VALUES (NOW(), NOW(), 1," . $user['ID'] . ", " . $selectedAddress['ID'] . ");";
    
    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        echo "Could not Add Order!";
        exit();
    }

    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_insert_id($stmt);
    mysqli_stmt_close($stmt);

    foreach($cartItems as $item) {
        $prodQuantity = GetProductByID($con, $item["ID"]);
        $newQuantity = ((int)$prodQuantity["Stock"]) - ((int)$item["Quantity"]);

        $sql = "INSERT INTO order_product (orderid, productid, quantity) VALUES ($result, " . $item["ID"] . ", " . $item["Quantity"] . ");";
        $stmt = mysqli_stmt_init($con);
        if(!mysqli_stmt_prepare($stmt, $sql)) {
            echo "Could not add order products";
            exit();
        }

        mysqli_stmt_execute($stmt);

        $sql = "UPDATE product SET Stock = '$newQuantity' WHERE ID = '" . $item["ID"] . "';";
        $stmt = mysqli_stmt_init($con);
        if(!mysqli_stmt_prepare($stmt, $sql)) {
            echo "Could not update product quantity";
            exit();
        }

        mysqli_stmt_execute($stmt);
        
    }
    return $result;
}

function GetOrdersByUser($con, $userID)
{
    $sql = "SELECT o.*, s.Status FROM orders o JOIN orderstatus s ON o.status = s.ID  WHERE o.User = '$userID';";

    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        echo "Could not load User Orders";
        exit();
    }

    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);

    mysqli_stmt_close($stmt);

    return $result;
}

function GetOrderProducts($con, $orderid)
{
    $sql = "SELECT * FROM order_product op WHERE op.orderid = '$orderid';";

    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        echo "Could not load User Orders";
        exit();
    }

    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);

    mysqli_stmt_close($stmt);

    return $result;
}

?>

