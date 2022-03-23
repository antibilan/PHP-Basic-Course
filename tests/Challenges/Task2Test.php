<?php

use MyApp\Challenges\Task2;
use MyApp\Logger\TestLogger;
use PHPUnit\Framework\TestCase;

class Task2Test extends TestCase
{
    /**
     * @dataProvider isPowerOfThreeProvider
     */

    public function testIsPowerOfThree($expected, $data): void
    {
        $task2 = new Task2(new TestLogger());
        self::assertEquals($expected, $task2->isPowerOfThree($data));
    }

    public function isPowerOfThreeProvider(): array
    {
        return [
            [true, 1],
            [true, 3],
            [false, 4],
            [true, 27],
            [true, '3'],
        ];
    }

    /**
     * @dataProvider isPowerOfThreeWrongProvider
     */

    public function testIsPowerOfThreeWrong($data, $logMsg): void
    {
        $task2 = new Task2(new TestLogger());

        $this->expectException('Exception');
        try {
            $task2->isPowerOfThree($data);
        } finally {
            self::assertNotFalse(strpos(file_get_contents(__DIR__ . '/../../tests/test_log.txt'), $logMsg));
        }
    }

    public function isPowerOfThreeWrongProvider(): array
    {
        return [
            [0, 'isPowerOfThree: The number is not Natural'],
            [-3, 'isPowerOfThree: The number is not Natural'],
        ];
    }
}
