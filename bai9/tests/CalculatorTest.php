<?php
require __DIR__ . '/../src/Calculator.php';
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function testAdd()
    {
        $calculator = new Calculator();

        $this->assertEquals(17, $calculator->add(10, 7));
        $this->assertEquals(30, $calculator->add(15, 15));
    }
}