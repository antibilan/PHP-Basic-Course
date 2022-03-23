<?php

namespace MyApp\Challenges;

class Task4 extends Task
{
    public function addDigits(int $n): int
    {
        $this->logger->info('addDigits of Task4 has been executed.');
        if ($n < 0) {
            $this->logger->err('addDigits of Task4: The number is negative!');
            throw new \Exception('The number is negative!');
        }

        $nStrSplitted = str_split((string)$n);
        $result = $n;

        while ($result > 9) {
            $result = 0;
            foreach ($nStrSplitted as $value) {
                $result += (int)$value;
            }
            $nStrSplitted = str_split((string)$result);
        }
        return $result;
    }
}
