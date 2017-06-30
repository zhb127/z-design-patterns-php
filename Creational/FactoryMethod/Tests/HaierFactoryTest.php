<?php

namespace DesignPatterns\Creational\FactoryMethod\Tests;

use DesignPatterns\Creational\FactoryMethod\HaierFactory;
use DesignPatterns\Creational\FactoryMethod\HaierTV;
use PHPUnit\Framework\TestCase;

class HaierFactoryTest extends TestCase
{
    public function testProductTV()
    {
        $tv = (new HaierFactory())->produceTV();
        $this->assertInstanceOf(HaierTV::class, $tv);
    }
}