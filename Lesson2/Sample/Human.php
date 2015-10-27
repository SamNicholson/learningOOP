<?php

namespace Lesson2\Sample;

class Human
{

    private $iq;
    private $name;


    /**
     * Does this human have a brain?
     * @return bool
     */
    public function hasBrain()
    {
        return true;
    }

    /**
     * Does this human have a penis?
     * @return bool
     */
    public function hasPenis()
    {
        return false;
    }

    /**
     * Get the humans current IQ
     * @return mixed
     */
    public function getIq()
    {
        return $this->iq;
    }

    /**
     * Set the humans IQ
     * @param mixed $iq
     */
    public function setIq($iq)
    {
        $this->iq = $iq;
    }

    /**
     * Set the humans name
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get the humans name
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    public function __toString()
    {
        return $this->name . ' with an IQ of ' . $this->iq;
    }
}
