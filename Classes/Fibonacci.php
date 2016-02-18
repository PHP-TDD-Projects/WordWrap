<?php
class Fibonacci
{
    function isFibonnaci($n)
    {
        $firstFibonnaciEquation = sqrt(5 * $n * $n - 4);
        if ($firstFibonnaciEquation - ceil($firstFibonnaciEquation) == 0) {
            return true;
        }

        $secondFibonnaciEquation = sqrt(5 * $n * $n + 4);
        if ($secondFibonnaciEquation - ceil($secondFibonnaciEquation) == 0) {
            return true;
        }
        return false;

        /*$secondFibonnaciEquation = sqrt(5 * $n * $n + 4);

        if ($firstFibonnaciEquation - ceil($firstFibonnaciEquation) == 0) {
            return true;
        } else if ($secondFibonnaciEquation - ceil($secondFibonnaciEquation) == 0) {
            return true;
        } else {
            return false;
        }*/
    }
}