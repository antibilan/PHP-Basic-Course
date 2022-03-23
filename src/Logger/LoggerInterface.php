<?php

namespace MyApp\Logger;

interface LoggerInterface
{
    public function err(string $msg): void;

    public function warn(string $msg): void;

    public function info(string $msg): void;
}
