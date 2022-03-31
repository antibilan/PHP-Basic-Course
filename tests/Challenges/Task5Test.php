<?php

namespace Tests\Challenges;

use MyApp\Challenges\Task5;
use MyApp\Logger\TestLogger;
use PHPUnit\Framework\TestCase;

class Task5Test extends TestCase
{
    /**
     * @dataProvider isBalancedProvider
     */

    public function testIsBalanced($expected, $data): void
    {
        $task5 = new Task5(new TestLogger());
        self::assertEquals($expected, $task5->isBalanced($data));
    }

    public function isBalancedProvider(): array
    {
        return [
            [true,'(())'],
            [false, '((())'],
            [true, '()()'],
            [false, ')()('],
            [false, ')'],
            [false, '('],
            [false, '))(('],
        ];
    }

    /**
     * @dataProvider isBalancedWrongProvider
     */

    public function testIsBalancedWrong($data, $logMsg): void
    {
        $task5 = new Task5(new TestLogger());

        $this->expectException('Exception');
        try {
            $task5->isBalanced($data);
        } finally {
            self::assertEquals(TestLogger::$lastEntry, $logMsg);
        }
    }

    public function isBalancedWrongProvider(): array
    {
        $logMsg = '[ERR]isBalanced of Task5: The string consists of not only round brackets!';
        return [
            ['abs', $logMsg],
            ['123', $logMsg],
            ['a(s)', $logMsg],
            ['((()))!', $logMsg],
        ];
    }
}
