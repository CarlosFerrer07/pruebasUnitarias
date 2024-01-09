<?php

class Calc
{
    public function sum(int $num1, int $num2)
    {
        return $num1 + $num2;
    }

    public function rest(int $num1, int $num2) 
    {
        return $num1 - $num2;
    }

    public function div(int $num1, int $num2)
    {
        return $num1 / $num2;
    }

    public function structure():array {
        
        return ['foo' => 'bar'];
    }
}
