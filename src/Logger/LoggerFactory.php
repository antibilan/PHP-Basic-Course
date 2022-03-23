<?php

namespace MyApp\Logger;

class LoggerFactory
{
    private static array $config;

    private static $instance;

    private function __construct()
    {
    }

    public static function setConfig($config)
    {
        self::$config = $config;
    }

    public static function getLogger(): LoggerInterface
    {
        if (null === self::$instance) {
            switch (self::$config['logger']['type']) {
                case 'stdout':
                    self::$instance = new StdoutLogger();
                    break;
                case 'file':
                    self::$instance = new FileLogger(self::$config['logger']['filename']);
                    break;
                case 'test':
                case 'default':
                    self::$instance = new TestLogger();
            }
        }

        return self::$instance;
    }
}
