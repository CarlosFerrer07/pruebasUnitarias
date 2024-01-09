<?php

use PHPUnit\Framework\TestCase;

require '../Classes/Calc.php';

class CalcTest extends TestCase
{
    public function test_sum1()
    {
        $calc = new Calc();
        $result = $calc->sum(1, 2);
        $this->assertEquals(3, $result); //este test lo pasa
    }
    public function test_sum2()
    {
        $calc = new Calc();
        $result = $calc->sum(1, -1);
        $this->assertEquals(0, $result); 
    }

    public function test_rest1() {
        $calc = new Calc();
        $result = $calc->rest(6,4);
        $this->assertEquals(2,$result);
    }

    public function test_div1() {
        $calc = new Calc();
        $result = $calc->div(0,2);
        $this->assertEquals(0,$result);
    }

    public function testFailure(): void
    {
        $calc = new Calc();
        $result = $calc->structure();
        $this->assertArrayHasKey('hola', $result);
    }
}
