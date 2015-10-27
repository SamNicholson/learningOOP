<?php

namespace Lesson4\Sample;

abstract class Mammal
{
    private $legs;

    /**
     * @return mixed
     */
    public function getLegs()
    {
        return $this->legs;
    }

    /**
     * @param mixed $legs
     */
    public function setLegs($legs)
    {
        $this->legs = $legs;
    }
}
