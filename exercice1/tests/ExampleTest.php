
<?php

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
   
    public function testAddition()
    {
        $result = 1 + 1;
        $this->assertEquals(2, $result, "1 + 1 should equal 2");
    }

    public function testStringLength()
    {
        $string = "hello";
        $length = strlen($string);
        $this->assertEquals(5, $length, "The length of the string 'hello' should be 5");
    }
}