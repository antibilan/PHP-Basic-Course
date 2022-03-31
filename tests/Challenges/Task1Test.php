<?php

namespace Tests\Challenges;

use MyApp\Challenges\Task1;
use MyApp\Logger\TestLogger;
use PHPUnit\Framework\TestCase;

class Task1Test extends TestCase
{
    public function testBinarySum()
    {
        $task1 = new Task1(new TestLogger());

        $actual = $task1->binarySum('111', '100');
        $expected = '1011';

        self::assertEquals($actual, $expected);
    }
}
