<?php 

use PHPUnit\Framework\TestCase;
include_once(__DIR__.'/../functions.php');
include_once(__DIR__.'/../dbfunctions.php');

class testing extends TestCase{
    
   /* vendor\bin\phpunit tests\testing.php */

    public function testDBConnection()
    {
        $con = mysqli_connect('localhost', 'root', '', 'funzies');
        $this->assertNull ($con->connect_error); 
    }

    public function testAdminLogin()
    {
        $con = mysqli_connect('localhost', 'root', '', 'funzies');
        $result = AdminLogin($con, 'n4dinevid4l@hotmail.com', 'abc123');
        $this -> assertTrue($result);
    }

    public function testGetRoles()
    {
        $con = mysqli_connect('localhost', 'root', '', 'funzies');
        $result = GetRoles($con);
        $this -> assertGreaterThan(0, $result -> num_rows);
    }

    /* 
    public function testGetData()
    {
        $con = mysqli_connect('localhost', 'root', '', 'funzies');
        $resultRoles = GetRoles($con);
        $resultUsers = GetUsers($con);
        $resultCategories = GetCategories($con);
        $resultBrands = GetBrands($con);
        $resultProducts = GetProducts($con);
        $resultOrders = GetOrders($con);
        $resultOrderStatus = GetOrderStatus($con);
        $resultReviewStatus = GetReviewStatus($con);
        $resultReviews = GetReviews($con);
        $this -> assertGreaterThan(0, $resultRoles -> num_rows);
        $this -> assertGreaterThan(0, $resultUsers -> num_rows);
        $this -> assertGreaterThan(0, $resultCategories -> num_rows);
        $this -> assertGreaterThan(0, $resultBrands -> num_rows);
        $this -> assertGreaterThan(0, $resultProducts -> num_rows);
        $this -> assertGreaterThan(0, $resultOrderStatus -> num_rows);
        $this -> assertGreaterThan(0, $resultOrders -> num_rows);
        $this -> assertGreaterThan(0, $resultReviews -> num_rows);
        $this -> assertGreaterThan(0, $resultReviewStatus -> num_rows);
    }
    */

   /* public function testAddRole()
    {
        $con = mysqli_connect('localhost', 'root', '', 'funzies');
        $result = createRole($con,'Test', 'Test object');
        $this -> assertTrue($result);
    }
*/

    /* public function testDeleteRole()
    {
        $con = mysqli_connect('localhost', 'root', '', 'funzies');
        $result = deleteRole($con,'25');
        $this -> assertTrue($result);
    }

    */
    /*
    public function testUpdateRole()
    {
        $con = mysqli_connect('localhost', 'root', '', 'funzies');
        $result = updateRole($con,'26', 'Updated Role', 'This is an updated test case');
        $this -> assertTrue($result);
    }
    */

    /* Get user by ID 
    public function testGetUser()
    {
        $con = mysqli_connect('localhost', 'root', '', 'funzies');
        $result = GetUserByID($con, 2);
        print_r ($result);
        $this -> assertNotEmpty($result);
    }
    */

    /*Update Account Details
    public function testUpdateAccountDetails()
    {
        $con = mysqli_connect('localhost', 'root', '', 'funzies');
        $user = GetUserByID($con, 2);
        $user['Name'] = 'Jane'; 
        $user['Surname'] = 'Doe'; 
        $user['ContactNumber'] = '777777777'; 
        $result = updateUserObject($con, $user);
        $this -> assertTrue($result);
    }
    */

    
    
}
?>