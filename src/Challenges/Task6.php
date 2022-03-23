<?php

namespace MyApp\Challenges;

class Task6 extends Task
{
    public function isPerfect(int $n): bool
    {
        $this->logger->info('isPerfect of Task6 has been executed.');

        $dividers = [];

        if ($n <= 1) {
            $this->logger->err('isPerfect of Task6: The number is not Natural or it\'s 1!');
            throw new \Exception('The number is not Natural or it\'s 1!');
        }

        for ($i = 1; $i <= $n / 2; $i++) {
            if ($n % $i === 0) {
                $dividers[] = $i;
            }
        }

        return array_sum($dividers) === $n;
    }
}
