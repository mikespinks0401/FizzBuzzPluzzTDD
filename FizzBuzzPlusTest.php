<?php
require_once 'FizzBuzzPlus.php';
require_once 'printList.php';

use PHPUnit\Framework\TestCase;

class FizzBuzzPlusTest extends TestCase
{
    public function test_returns_number_string()
    {
        $this->assertEquals("1", answer(1));
    }
    public function test_3_returns_fizz()
    {
        $this->assertEquals("Fizz", answer(3));
    }
    
    public function test_multiple_of_3_returns_fizz()
    {
        $this->assertEquals("Fizz", answer(9));
    }
    
    public function test_5_returns_fizz()
    {
        $this->assertEquals("Buzz", answer(5));
    }
    
    public function test_multiple_of_5_returns_fizz()
    {
        $this->assertEquals("Buzz", answer(10));
    }
    
    public function test_15_returns_FizzBuzz()
    {
        $this->assertEquals("FizzBuzz", answer(15));
    }
    
    public function test_splits_greater_than_10()
    {
        $this->assertEquals(2, strlen(10));
    }
    
    public function test_31_returns_Fizz()
    {
        $this->assertEquals("Fizz", answer(31));
    }
    
    
    public function test_13_returns_Fizz()
    {
        $this->assertEquals("Fizz", answer(13));
    }
    
    public function test_51_returns_Buzz()
    {
        $this->assertEquals("FizzBuzz", answer(51));
    }
    
    public function test_printList_creates_array_with_2_items()
    {
        $this->assertEquals(2, count(printList(2)));   
    }
    
    public function test_Answer()
    {
        print_r(printList(100));
    }
}

?>
