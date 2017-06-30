<?php

namespace DesignPatterns\Creational\FactoryMethod\Tests;

use DesignPatterns\Creational\FactoryMethod\HisenseFactory;
use DesignPatterns\Creational\FactoryMethod\HisenseTV;
use PHPUnit\Framework\TestCase;

class HisenseFactoryTest extends TestCase
{
    public function testProductTV()
    {
        $tv = (new HisenseFactory())->produceTV();
        $this->assertInstanceOf(HisenseTV::class, $tv);
    }
}