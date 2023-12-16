<?php

function GetUsers($con){
    $sql = "SELECT u.*, r.Name as 'roleName' FROM user u JOIN role r on u.Role = r.ID;";

    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt, $sql))
    {
        echo "Could not load Users";
        exit();
    }

    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);

    mysqli_stmt_close($stmt);

    return $result;
}


function GetRoles($con){
    $sql = "SELECT * FROM role";

    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt, $sql))
    {
        echo "Could not load Roles";
        exit();
    }

    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);

    mysqli_stmt_close($stmt);

    return $result;
}

function GetBrands($con){
    $sql = "SELECT * FROM brand";

    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt, $sql))
    {
        echo "Could not load Brands";
        exit();
    }

    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);

    mysqli_stmt_close($stmt);

    return $result;
}

function GetCategories($con){
    $sql = "SELECT * FROM category";

    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt, $sql))
    {
        echo "Could not load Categories";
        exit();
    }

    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);

    mysqli_stmt_close($stmt);

    return $result;
}

function GetProducts($con){
    $sql = "SELECT p.*, b.Name as 'brandName' FROM product p JOIN brand b on p.Brand = b.ID";

    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt, $sql))
    {
        echo "Could not load Products";
        exit();
    }

    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);

    mysqli_stmt_close($stmt);

    return $result;
}

function GetOrderStatus($con){
    $sql = "SELECT * FROM orderstatus";

    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt, $sql))
    {
        echo "Could not load Order Status";
        exit();
    }

    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);

    mysqli_stmt_close($stmt);

    return $result;
}

function GetReviewStatus($con){
    $sql = "SELECT * FROM reviewstatus";

    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt, $sql))
    {
        echo "Could not load Review Status";
        exit();
    }

    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);

    mysqli_stmt_close($stmt);

    return $result;
}

function GetOrders($con){
    
    $sql = "SELECT o.*, s.Status as 'statusOrder' FROM orders o JOIN orderstatus s on o.status = s.ID";

    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt, $sql))
    {
        echo "Could not load Orders";
        exit();
    }

    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);

    mysqli_stmt_close($stmt);

    return $result;
}

function GetReviews($con){
    
    $sql = "SELECT r.*, s.Status as 'statusReview' FROM review r JOIN reviewstatus s on r.Status = s.ID";

    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt, $sql))
    {
        echo "Could not load Reviews";
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
    if(!mysqli_stmt_prepare($stmt, $sql))
    {
        echo "Could not create Role";
        exit();
    }

    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);

    mysqli_stmt_close($stmt);

    return $result;
}

function updateRole($con, $id, $name, $details)
{
    $sql = "UPDATE role SET Name = '$name', Details = '$details' WHERE ID = $id";
    
    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt, $sql))
    {
        echo "Could not update Role";
        exit();
    }

    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);

    mysqli_stmt_close($stmt);

    return $result;
}

function deleteRole($con, $id)
{
    $sql = "DELETE FROM role WHERE ID = '$id'";
    
    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt, $sql))
    {
        echo "Could not delete Roles";
        exit();
    }

    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);

    mysqli_stmt_close($stmt);

    return $result;
}



?>