<?php

namespace DesignPatterns\Creational\AbstractFactory;

class TCLFactory implements FactoryInterface
{
    public function produceTV()
    {
        return new TCLTV();
    }

    public function produceAC()
    {
        return new TCLAC();
    }
}