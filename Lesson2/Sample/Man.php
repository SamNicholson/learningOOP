<?php

namespace Lesson2\Sample;

class Man extends Human
{

    public function __construct($name = '')
    {
        $this->setName($name);
    }

    public function hasOvary()
    {
        return false;
    }

}
