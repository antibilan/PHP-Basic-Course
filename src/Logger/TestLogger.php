<?php

namespace MyApp\Logger;

class TestLogger extends AbstractLogger
{
    public static string $lastEntry;

    public function log(string $msg): void
    {
        self::$lastEntry = $msg;
    }
}
