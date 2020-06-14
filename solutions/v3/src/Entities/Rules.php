<?php

declare(strict_types=1);

namespace Denver\NumberTask\Entities;

use Denver\NumberTask\Services\MathService;

class Rules
{
    /**
     * Math Service class
     *
     * @var MathService
     */
    private $mathService;

    public function __construct(MathService $mathService)
    {
        $this->mathService = $mathService;
    }

    /**
     * Checks if a number is greater than 5
     *
     * @param integer $number
     * @return boolean
     */
    public function isGreaterThanFive(int $number) : bool
    {
        return $this->mathService->isNumberGreaterThan($number, 5);
    }

    /**
     * Checks if a number is less than 3
     *
     * @param integer $number
     * @return boolean
     */
    public function isLessThanThree(int $number) : bool
    {
        return $this->mathService->isNumberLessThan($number, 3);
    }

    /**
     * Checks if a number is between 5 and 11
     *
     * @param integer $number
     * @return boolean
     */
    public function isBetweenFiveAndEleven(int $number) : bool
    {
        return $this->mathService->isNumberBetweenTwoNumbers($number, 5, 11);
    }

    /**
     * Checks if a number is equal to one
     *
     * @param integer $number
     * @return boolean
     */
    public function isEqualToOne(int $number) : bool
    {
        return $this->mathService->isNumberEqualTo($number, 1);
    }

    /**
     * Checks if a number is equal to four
     *
     * @param integer $number
     * @return boolean
     */
    public function isEqualToFour(int $number) : bool
    {
        return $this->mathService->isNumberEqualTo($number, 4);
    }

    /**
     * Checks if a number is equal to nine
     *
     * @param integer $number
     * @return boolean
     */
    public function isEqualToNine(int $number) : bool
    {
        return $this->mathService->isNumberEqualTo($number, 9);
    }

    /**
     * Checks if a number is divisible by two
     *
     * @param integer $number
     * @return boolean
     */
    public function isDivisibleByTwo(int $number) : bool
    {
        return $this->mathService->isDivisible($number, 2);
    }
    
    /**
     * Checks if a number is divisible by 3
     *
     * @param integer $number
     * @return boolean
     */
    public function isDivisibleByThree(int $number) : bool
    {
        return $this->mathService->isDivisible($number, 3);
    }

    /**
     * Checks if a number is divisible by 5
     *
     * @param integer $number
     * @return boolean
     */
    public function isDivisibleByFive(int $number) : bool
    {
        return $this->mathService->isDivisible($number, 5);
    }

    /**
     * Checks if a number is divisible by 7
     *
     * @param integer $number
     * @return boolean
     */
    public function isDivisibleBySeven(int $number) : bool
    {
        return $this->mathService->isDivisible($number, 7);
    }
}
