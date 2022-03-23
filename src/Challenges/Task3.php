<?php

namespace MyApp\Challenges;

class Task3 extends Task
{
    public function fib(int $n): int
    {
        $this->logger->info('fib of Task3 has been executed.');
        if ($n < 0) {
            $this->logger->err('fib of Task3: The number is negative!');
            throw new \Exception('The number is negative!');
        }
        if ($n === 0) {
            return 0;
        }

        if ($n === 1) {
            return 1;
        }

        $result = 0;
        $array = [0, 1];
        for ($i = 2; $i <= $n; $i++) {
            $array[$i] = $array[$i - 1] + $array[$i - 2];
            $result = $array[$i];
        }
        return $result;
    }
}
