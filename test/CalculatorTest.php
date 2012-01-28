<?php

require_once 'src/Calculator.php';

class CalculatorTest extends PHPUnit_Framework_TestCase
{
    public function testAdd()
    {
        $calc = new Calculator();
        $this->assertEquals(5, $calc->add(2, 3));
    }
}
