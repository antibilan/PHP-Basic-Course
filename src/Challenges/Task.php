<?php

namespace MyApp\Challenges;

use MyApp\Logger\LoggerInterface;

class Task
{
    protected LoggerInterface $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
