<?php

namespace Denver\NumberTask\Services\MessageRules;

use Denver\NumberTask\Entities\Rules;
use Denver\NumberTask\Interfaces\MessageRuleInterface;
use Denver\NumberTask\Services\MathService;
use Exception;
use stdClass;

class ComparisonMessageRuleService implements MessageRuleInterface
{
    /**
     * The message rules
     *
     * @var array
     */
    private $messageRules;

    public function __construct()
    {
        $this->messageRules = [];
    }

    /**
     * Add a specific rule function to a message
     *
     * @param string $functionName
     * @param string $message
     * @return self
     */
    public function addToMessageRules(string $functionName, string $message) : self
    {
        $messageRule = new stdClass;

        $messageRule->functionName = $functionName;
        $messageRule->message = $message;

        $currentRules = $this->getMessageRules();
        
        $currentRules[] = $messageRule;

        return $this->setMessageRules($currentRules);
    }

    /**
     * Validates a given number if it satisfy the given rules and returns the equivalent message
     *
     * @param integer $number
     * @return string
     */
    public function validateRules(int $number) : string
    {
        $rules = $this->getMessageRules();
        $message = '';

        foreach ($rules as $rule) {
            $rules = new Rules(new MathService());

            if (!method_exists($rules, $rule->functionName)) {
                throw new Exception("Function {$rule->functionName} does not exist in Rules entity");
            }

            $isSatisfied = $rules->{$rule->functionName}($number);

            if ($isSatisfied) {
                $message .= $rule->message;
            }
        }

        return $message !== '' ? $message : (string) $number;
    }

    /**
     * Get the value of messageRules
     *
     * @return array
     */
    public function getMessageRules() : array
    {
        return $this->messageRules;
    }

    /**
     * Set the value of messageRules
     *
     * @return  self
     */
    public function setMessageRules(array $messageRules) : self
    {
        $this->messageRules = $messageRules;

        return $this;
    }
}
