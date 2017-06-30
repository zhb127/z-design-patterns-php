<?php

namespace DesignPatterns\Creational\AbstractFactory;

class HisenseTV implements TVInterface
{
    public function play()
    {
        echo '海信电视机播放。', PHP_EOL;
    }
}