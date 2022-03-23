<?php

use MyApp\Challenges\Task7;
use \PHPUnit\Framework\TestCase;
use MyApp\Logger\TestLogger;

class Task7Test extends TestCase
{
    /**
     * @dataProvider isHappyWrongProvider
     */
    public function testIsHappyWrong($data, $logMsg): void
    {
        $task7 = new Task7(new TestLogger());

        $this->expectException('Exception');
        try {
            $task7->isHappy($data);
        } finally {
            self::assertNotFalse(strpos(file_get_contents(__DIR__ . '/../../tests/test_log.txt'), $logMsg));
        }
    }

    public function isHappyWrongProvider(): array
    {
        return [
            ['', '[ERR]This is not a ticket!'],
            ['100', '[ERR]The ticket has uneven number of digits'],
        ];
    }

    /**
     * @dataProvider isHappyProvider
     */
    public function testIsHappy($expected, $data): void
    {
        $task7 = new Task7(new TestLogger());

        self::assertEquals($expected, $task7->isHappy($data));
    }

    public function isHappyProvider(): array
    {
        return [
            [true, '101101'],
            [false, '111000'],
            [true, '11'],
            [false, '10'],
        ];
    }
}
