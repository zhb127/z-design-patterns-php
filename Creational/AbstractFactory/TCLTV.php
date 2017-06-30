<?php

namespace DesignPatterns\Creational\AbstractFactory;

class TCLTV implements TVInterface
{
    public function play()
    {
        echo 'TCL 电视机播放。', PHP_EOL;
    }
}