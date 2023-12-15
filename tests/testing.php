<?php 

use PHPUnit\Framework\TestCase;
include_once(__DIR__.'/../functions.php');

class testing extends TestCase{
    
   /* vendor\bin\phpunit tests\testing.php */

    public function testDBConnection()
    {
        $con = mysqli_connect('localhost', 'root', '', 'funzies');
        $this->assertNull ($con->connect_error); 
    }

}


?>