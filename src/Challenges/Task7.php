<?php

namespace MyApp\Challenges;

class Task7 extends Task
{
    public function isHappy(string $string): bool
    {
        $this->logger->info('isHappy of Task7 has been executed.');

        $len = strlen($string);

        if ($len === 0) {
            $this->logger->err('This is not a ticket!');
            throw new \Exception('This is not a ticket!');
        }

        if ($len % 2 !== 0) {
            $this->logger->err('The ticket has uneven number of digits');
            throw new \Exception('The ticket has uneven number of digits');
        }

        $halfs = str_split($string, $len / 2);
        $halfArr1 = str_split($halfs[0]);
        $halfArr2 = str_split($halfs[1]);

        return array_sum($halfArr1) === array_sum($halfArr2);
    }
}
