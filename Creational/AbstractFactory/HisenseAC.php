<?php

namespace DesignPatterns\Creational\AbstractFactory;

class HisenseAC implements ACInterface
{
    public function changeTemperature()
    {
        echo '海信空调改变温度。', PHP_EOL;
    }
}