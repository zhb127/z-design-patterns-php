<?php

namespace DesignPatterns\Creational\AbstraceFactory\Tests;

use DesignPatterns\Creational\AbstractFactory\HaierAC;
use DesignPatterns\Creational\AbstractFactory\HaierFactory;
use DesignPatterns\Creational\AbstractFactory\HaierTV;
use DesignPatterns\Creational\AbstractFactory\HisenseAC;
use DesignPatterns\Creational\AbstractFactory\HisenseFactory;
use DesignPatterns\Creational\AbstractFactory\HisenseTV;
use DesignPatterns\Creational\AbstractFactory\TCLAC;
use DesignPatterns\Creational\AbstractFactory\TCLFactory;
use DesignPatterns\Creational\AbstractFactory\TCLTV;
use PHPUnit\Framework\TestCase;

class AbstraceFactoryTest extends TestCase
{
    public function testProductHaierProducts()
    {
        $factory = new HaierFactory();

        $tv = $factory->produceTV();
        $this->assertInstanceOf(HaierTV::class, $tv);

        $ac = $factory->produceAC();
        $this->assertInstanceOf(HaierAC::class, $ac);
    }

    public function testProductHisenseProducts()
    {
        $factory = new HisenseFactory();

        $tv = $factory->produceTV();
        $this->assertInstanceOf(HisenseTV::class, $tv);

        $ac = $factory->produceAC();
        $this->assertInstanceOf(HisenseAC::class, $ac);
    }

    public function testProductTCLProducts()
    {
        $factory = new TCLFactory();

        $tv = $factory->produceTV();
        $this->assertInstanceOf(TCLTV::class, $tv);

        $ac = $factory->produceAC();
        $this->assertInstanceOf(TCLAC::class, $ac);
    }
}