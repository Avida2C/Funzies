<?php 

use PHPUnit\Framework\TestCase;
include_once(__DIR__.'/../functions.php');

class testing extends TestCase{
    public function testTrueReturn(){
        $output = true;
        $this->assertTrue($output);
    }

}


?>