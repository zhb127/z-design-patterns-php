<?php

namespace DesignPatterns\Creational\AbstractFactory;

class HaierFactory implements FactoryInterface
{
    public function produceTV()
    {
        return new HaierTV();
    }

    public function produceAC()
    {
        return new HaierAC();
    }
}