<?php

namespace MyApp\Challenges;

class Task2 extends Task
{
    public function isPowerOfThree(int $num3): bool
    {
        $this->logger->info('isPowerOfThree of Task2 has been executed.');

        if ($num3 <= 0) {
            $this->logger->err('isPowerOfThree: The number is not Natural');
            throw new \Exception('The number is not Natural');
        }

        while ($num3 / 3 >= 1) {
            $num3 /= 3;
        }
        return $num3 === 1;
    }
}
