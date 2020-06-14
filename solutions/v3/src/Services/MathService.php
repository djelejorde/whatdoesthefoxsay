<?php

declare(strict_types=1);

namespace Denver\NumberTask\Services;

class MathService
{
    /**
     * Checks if a number is divisible by a number
     *
     * @param integer $number
     * @param integer $divisor
     * @return boolean
     */
    public function isDivisible(int $number, int $divisor) : bool
    {
        return $number % $divisor === 0;
    }

    /**
     * Checks if a number is greater than the other
     *
     * @param integer $number
     * @param integer $comparedNumber
     * @return boolean
     */
    public function isNumberGreaterThan(int $number, int $comparedNumber) : bool
    {
        return $number > $comparedNumber;
    }

    /**
     * Checks if a number is less than the other
     *
     * @param integer $number
     * @param integer $comparedNumber
     * @return boolean
     */
    public function isNumberLessThan(int $number, int $comparedNumber) : bool
    {
        return $number < $comparedNumber;
    }

    /**
     * Checks if a number is equal to a certain number
     *
     * @param int $number
     * @param integer $comparedNumber
     * @return boolean
     */
    public function isNumberEqualTo(int $number, int $comparedNumber) : bool
    {
        return $number === $comparedNumber;
    }

    /**
     * Checks if a number is between two numbers
     *
     * @param integer $number
     * @param integer $firstNumber
     * @param integer $secondNumber
     * @return boolean
     */
    public function isNumberBetweenTwoNumbers(int $number, int $firstNumber, int $secondNumber) : bool
    {
        return $number > $firstNumber && $number < $secondNumber;
    }
}
