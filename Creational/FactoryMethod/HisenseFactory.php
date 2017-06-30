<?php

namespace DesignPatterns\Creational\FactoryMethod;

class HisenseFactory implements FactoryInterface
{
    public function produceTV()
    {
        return new HisenseTV();
    }
}