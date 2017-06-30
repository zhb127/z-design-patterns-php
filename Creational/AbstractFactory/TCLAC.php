<?php

namespace DesignPatterns\Creational\AbstractFactory;

class TCLAC implements ACInterface
{
    public function changeTemperature()
    {
        echo 'TCL 空调改变温度。', PHP_EOL;
    }
}