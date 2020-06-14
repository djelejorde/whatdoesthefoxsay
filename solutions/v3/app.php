<?php

declare(strict_types=1);

require_once __DIR__.'/vendor/autoload.php';

use Denver\NumberTask\Services\MessageRules\DivisibilityMessageRuleService;
use Denver\NumberTask\Services\MessageRules\ComparisonMessageRuleService;
use Denver\NumberTask\Services\MathService;
use Denver\NumberTask\Services\OutputterService;

echo "Task v1:\n";

$results = [];
$min = 1;
$max = 20;
$number = 1;

try {
    $divisibilityMessageRuleService = new DivisibilityMessageRuleService(new MathService());
    $divisibilityMessageRuleService->addToMessageRules('isDivisibleByThree', 'pa')
                        ->addToMessageRules('isDivisibleByFive', 'pow');

    while ($number >= $min && $number <= $max) {
        $result = $divisibilityMessageRuleService->validateRules($number);
    
        $results[] = $result;

        $number++;
    }

    $outputterService = new OutputterService();
    echo $outputterService->concatWithSeparator($results, ' ');
} catch (Exception $e) {
    echo $e->getMessage();
}

echo "\n";

echo "Task v2:\n";

$results = [];
$min = 1;
$max = 15;
$number = 1;

try {
    $divisibilityMessageRuleService = new DivisibilityMessageRuleService(new MathService());
    $divisibilityMessageRuleService->addToMessageRules('isDivisibleByTwo', 'hatee')
                                ->addToMessageRules('isDivisibleBySeven', 'ho');

    while ($number >= $min && $number <= $max) {
        $result = $divisibilityMessageRuleService->validateRules($number);
    
        $results[] = $result;

        $number++;
    }

    $outputterService = new OutputterService();
    echo $outputterService->concatWithSeparator($results, '-');
} catch (Exception $e) {
    echo $e->getMessage();
}

echo "\n";

echo "Task v3:\n";

$results = [];
$min = 1;
$max = 10;
$number = 1;

try {
    $comparisonMessageRuleService = new ComparisonMessageRuleService(new MathService());
    $comparisonMessageRuleService->addToMessageRules('isEqualToOne', 'joff')
                                ->addToMessageRules('isEqualToFour', 'joff')
                                ->addToMessageRules('isEqualToNine', 'joff')
                                ->addToMessageRules('isGreaterThanFive', 'tchoff');

    while ($number >= $min && $number <= $max) {
        $result = $comparisonMessageRuleService->validateRules($number);
    
        $results[] = $result;

        $number++;
    }

    $outputterService = new OutputterService();
    echo $outputterService->concatWithSeparator($results, '-');
} catch (Exception $e) {
    echo $e->getMessage();
}

echo "\n\n";

echo "More conditions:\n\n";

echo "Less than 3 and Between 5 and 11: \n";

$results = [];
$min = 1;
$max = 12;
$number = 1;

try {
    $comparisonMessageRuleService = new ComparisonMessageRuleService(new MathService());
    $comparisonMessageRuleService->addToMessageRules('isLessThanThree', 'a');
    $comparisonMessageRuleService->addToMessageRules('isBetweenFiveAndEleven', 'hee');

    while ($number >= $min && $number <= $max) {
        $result = $comparisonMessageRuleService->validateRules($number);
    
        $results[] = $result;

        $number++;
    }

    $outputterService = new OutputterService();
    echo $outputterService->concatWithSeparator($results, '_');
} catch (Exception $e) {
    echo $e->getMessage();
}
echo "\n";
