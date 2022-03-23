<?php

use MyApp\Challenges\Task4;
use MyApp\Logger\TestLogger;
use \PHPUnit\Framework\TestCase;

class Task4Test extends TestCase
{
    /**
     * @dataProvider addDigitsProvider
     */
    public function testAddDigits($expected, $data): void
    {
        $task4 = new Task4(new TestLogger());
        self::assertEquals($expected, $task4->addDigits($data));
    }

    public function addDigitsProvider(): array
    {
        return [
            [0, 0],
            [1, 1],
            [9, 9],
            [1, 10],
            [2, 38],
            [2, '38'],
        ];
    }

    public function testAddDigitsNegative(): void
    {
        $task4 = new Task4(new TestLogger());

        $this->expectException('Exception');
        try {
            $task4->addDigits(-38);
        } finally {
            self::assertNotFalse(strpos(file_get_contents(__DIR__ . '/../../tests/test_log.txt'),'addDigits of Task4: The number is negative!' ));
        }
    }
}
