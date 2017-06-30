<?php

namespace DesignPatterns\Creational\AbstractFactory;

class HisenseFactory implements FactoryInterface
{
    public function produceTV()
    {
        return new HisenseTV();
    }

    public function produceAC()
    {
        return new HisenseAC();
    }
}