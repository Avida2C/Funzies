<?php 
use PHPUnit\Framework\TestCase;
require_once __DIR__.'/../functions.php';
require_once __DIR__.'/../dbfunctions.php';

class testing extends TestCase
{
    /* vendor\bin\phpunit tests\testing.php */
    /*
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
        $this -> assertGreaterThan(0, $resultRoles -> num_rows);
        $this -> assertGreaterThan(0, $resultUsers -> num_rows);
        $this -> assertGreaterThan(0, $resultCategories -> num_rows);
        $this -> assertGreaterThan(0, $resultBrands -> num_rows);
        $this -> assertGreaterThan(0, $resultProducts -> num_rows);
        $this -> assertGreaterThan(0, $resultOrderStatus -> num_rows);
        $this -> assertGreaterThan(0, $resultOrders -> num_rows);
    }
    

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
    

    public function testLogout()
    {
        $con = mysqli_connect('localhost', 'root', '', 'funzies');
        $result = userLogin($con, 'n4dinevid4l@hotmail.com', 'password');
        $this -> assertNotEmpty($_SESSION['USER']);

        logout();
        $this -> assertEmpty($_SESSION);
    }  

    public function testContactUs()
    {
       $result = Mailer('example@example.com', 'testcase', 'testing Mailer', 'This is a test');
       $this->assertTrue($result);
    }
    

    public function testProductListing()
    {
        $con = mysqli_connect('localhost', 'root', '', 'funzies');
        $result = GetProductByID($con, 4);
        $this->assertNotFalse($result);
    }

    public function testSearchAndFiltering()
    {
        $con = mysqli_connect('localhost', 'root', '', 'funzies');
        $result = GetProductsPage($con, '1', null, null, 'charger');
        $this->assertGreaterThan(0, $result -> num_rows);
    }
    

    public function testOrderStatus(){
        $con = mysqli_connect('localhost', 'root', '', 'funzies');
        $result = setOrderStatus($con, 9, 12);
        $this->assertTrue($result);
    }
    */
     public function testCheckout(){
        $con = mysqli_connect('localhost', 'root', '', 'funzies');
        $user = GetUserByID($con, 2);
        $prod = GetProductByID($con,4);
        $selectedAddress = GetAddressByID($con,24);
        $prod["Quantity"] = 1;
        $cartItems[0] = $prod;
        $result = createOrder($con, $user, $selectedAddress, $cartItems);
        $this->assertGreaterThan(0, $result);
     }
}
?>
