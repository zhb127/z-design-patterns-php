<?php

namespace DesignPatterns\Creational\FactoryMethod;

class HaierFactory implements FactoryInterface
{
    public function produceTV()
    {
        return new HaierTV();
    }
}