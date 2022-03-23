<?php

namespace MyApp\Challenges;

class Task1 extends Task
{
    public function binarySum(string $num1, string $num2): string
    {
        $this->logger->info('binarySum of Task1 has been executed.');

        $decNum1 = bindec($num1);
        $decNum2 = bindec($num2);

        $sum = $decNum1 + $decNum2;
        return decbin($sum);
    }
}
