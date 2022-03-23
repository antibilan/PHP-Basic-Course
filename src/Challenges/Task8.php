<?php

namespace MyApp\Challenges;

class Task8 extends Task
{
    public function showFizzBuzz(int $begin, int $end): void
    {
        echo $this->fizzBuzz($begin, $end);
    }
    public function fizzBuzz(int $begin, int $end): string
    {
        $this->logger->info('fizzBuzz of Task8 has been executed.');

        $result = array();

        if ($begin > $end) {
            $this->logger->err('fizzBuzz of Task8: Wrong input sequence: The begin is less than the end!');
            throw new \Exception('Wrong input sequence: The begin is less than the end!');
        }

        for ($i = $begin; $i <= $end; $i++) {
            if ($i % 3 === 0) {
                if ($i % 5 === 0) {
                    $result[] = 'FizzBuzz';
                } else {
                    $result[] = 'Fizz';
                }
            } elseif ($i % 5 === 0) {
                $result[] = 'Buzz';
            } else {
                $result[] = $i;
            }
        }
        return implode(' ', $result);
    }
}
