<?php

require __DIR__ . '/../src/Calculator.php';
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function testAdd()
    {
        $calculator = new Calculator();
        $this->assertEquals(11, $calculator->add(5, 6));
        $this->assertEquals(340, $calculator->add(110, 230));
    }

    public function testMultiple()
    {
        $calculator = new Calculator();
        $this->assertEquals(30, $calculator->multiple(5, 6));
        $this->assertEquals(10, $calculator->multiple(2, 5));
    }
}