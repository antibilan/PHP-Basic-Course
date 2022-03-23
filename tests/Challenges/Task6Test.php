<?php

use MyApp\Challenges\Task6;
use MyApp\Logger\TestLogger;
use PHPUnit\Framework\TestCase;

class Task6Test extends TestCase
{
    /**
     * @dataProvider isPerfectProvider
     */
    public function testIsPerfect($expected, $data): void
    {
        $task6 = new Task6(new TestLogger());
        self::assertEquals($expected, $task6->isPerfect($data));
    }

    public function isPerfectProvider(): array
    {
        return [
            [true, 6],
            [true, 28],
            [true, 496],
            [false, 10],
        ];
    }

    /**
     * @dataProvider isPerfectWrongProvider
     */

    public function testIsPerfectWrong($data, $logMsg): void
    {
        $task6 = new Task6(new TestLogger());
        $this->expectException('Exception');
        try {
            $task6->isPerfect($data);
        } finally {
            self::assertNotFalse(strpos(file_get_contents(__DIR__ . '/../../tests/test_log.txt'), $logMsg));
        }
    }

    public function isPerfectWrongProvider(): array
    {
        $logMsg = 'isPerfect of Task6: The number is not Natural or it\'s 1!';
        return [
            [1, $logMsg],
            [0, $logMsg],
            [-1, $logMsg],
        ];
    }
}