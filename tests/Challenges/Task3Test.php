<?php

use MyApp\Challenges\Task3;
use MyApp\Logger\TestLogger;
use PHPUnit\Framework\TestCase;

class Task3Test extends TestCase
{
    /**
     * @dataProvider fibProvider
     */
    public function testFib($expected, $data): void
    {
        $task3 = new Task3(new TestLogger());

        self::assertEquals($expected, $task3->fib($data));
    }

    public function fibProvider(): array
    {
        return [
            [0, 0],
            [1, 1],
            [2, 3],
            [5, 5],
            [55, 10],
            [55, '10'],
        ];
    }

    public function testFibNegative(): void
    {
        $task3 = new Task3(new TestLogger());

        $this->expectException('Exception');
        try {
            $task3->fib(-5);
        } finally {
            self::assertNotFalse(strpos(file_get_contents(__DIR__ . '/../../tests/test_log.txt'),'fib of Task3: The number is negative!' ));
        }
    }
}
