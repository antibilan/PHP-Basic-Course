<?php

namespace MyApp\Logger;

class TestLogger extends AbstractLogger
{
    public function log(string $msg): void
    {
        file_put_contents(__DIR__ . '/../../tests/test_log.txt', $msg . PHP_EOL, FILE_APPEND);
    }
}
