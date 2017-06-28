<?php

namespace DesignPatterns\Creational\Singleton;

final class Singleton
{
    private static $instance;

    public static function getInstance(): Singleton
    {
        if (!static::$instance) {
            static::$instance = new static();
        }

        return static::$instance;
    }

    private function __construct()
    {
    }

    private function __clone()
    {
    }

    private function __wakeup()
    {
    }
}