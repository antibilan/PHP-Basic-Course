<?php

namespace Tests\Challenges;

use MyApp\Challenges\Task8;
use MyApp\Logger\TestLogger;
use PHPUnit\Framework\TestCase;

class Task8Test extends TestCase
{
    /**
     * @dataProvider fizzBuzzProvider
     */

    public function testFizzBuzz($expected, $begin, $end): void
    {
        $task8 = new Task8(new TestLogger());
        self::assertEquals($expected, $task8->fizzBuzz($begin, $end));
    }

    public function fizzBuzzProvider(): array
    {
        return [
            ['11 Fizz 13 14 FizzBuzz 16 17 Fizz 19 Buzz', 11, 20],
            ['1 2 Fizz 4 Buzz Fizz 7 8 Fizz Buzz', 1, 10],
            ['1 2 Fizz 4 Buzz Fizz 7 8 Fizz Buzz', '1', '10'],
        ];
    }

    public function testFizzBuzzWrong(): void
    {
        $logMsg = "[ERR]fizzBuzz of Task8: Wrong input sequence: The begin is less than the end!";
        $task8 = new Task8(new TestLogger());

        $this->expectException('Exception');
        try {
            $task8->fizzBuzz(10, 5);
        } finally {
            self::assertEquals(TestLogger::$lastEntry, $logMsg);
        }
    }
}
